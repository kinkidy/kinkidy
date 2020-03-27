//Variable declaration
const myName = 'Ahmad Yusuf';
var courses = ['HTML', 'CSS', 'JavaScript', 'PHP', 'Node,js'];
var displayName = document.getElementById('display-name'); 
var displayCourses = document.getElementById('display-courses'); 

const oddNumber = () => {
    let displayCourse = [];

if (courses.length % 2 !== 0) {

    for (let i = 0; i <= 200; i++) {
        if (i % 3 === 0) {
            displayCourse.push(i);
            }
        
    }return displayCourse;
}

    
};

displayName.innerHTML = myName;
displayCourses.innerHTML= oddNumber();

// console.log(oddNumber);