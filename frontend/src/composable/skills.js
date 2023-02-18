import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";
import store from '../store';

axios.defaults.baseURL = "http://127.0.0.1:8000/api/v1/";

export default function useSkills(){
    
    const skills = ref([]);
    const skill = ref([]);  
    const router = useRouter();  
    
    
    const getSkills = () =>{
        axios.get('skills')
            .then(res => {
                skills.value = res.data.results;
            })
            .catch(err => console.log(err))
      }

      const getSkill = async (id) => {
        try {
          const res = await axios.get('skills/' + id);
          skill.value = res.data;
        } catch (err) {
          console.log(err);
        }
      }
      
      const storeSkill = async(data) =>{
        try{
            await axios.post('skills' , data)
            await router.push({name : "SkillIndex"})
        }catch(err){
            console.log(err)
        }
    }
      const deleteSkill = async(id) =>{
        if(!window.confirm('Are you sure?')){
          return
        }
        await axios.delete('skills/' + id);
        await getSkills();
      }
      const editSkill = async (id) => {
        try{
            await axios.put('skills/' + id, skill.value);
            await router.push({name:'SkillIndex'})
        }catch(err){
            console.log(err)
        }
    }


    return {
        skill,
        skills,
        getSkill,
        getSkills,
        editSkill,
        deleteSkill,
        storeSkill
    };
}
