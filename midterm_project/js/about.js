// Back function and forward function
var imageCounter = 0; //initialize to first image
var imageArray = new Array(3);
for(let i=0; i<imageArray.length; i++) {
  imageArray[i] = "../pictures/about_gallery/" + (i+1) + ".jpeg";
}

usArray = new Array(3);

const john = {
    "name": "John Erwin",
    "major": "Computer Science",
    "grade": "Senior",
    "expectedGraduation": "May 2022",
    "postGradPlans": "Get a job so I can make enough money to buy a boat",
    "hobbies": "I love the outdoors. I'm big into fishing and hunting. I also love music. I love playing the drums and guitar, and I love listening to music."

};

const tanner = {
    "name": "Tanner Skelton",
    "major": "Software Engineering",
    "grade": "Senior",
    "expectedGraduation": "May 2022",
    "postGradPlans": "Working on developing Neural Nest on the side while working full time at Spreetail as a Software Developer.",
    "hobbies": "I enjoy spending time with friends, photography, 3D modeling and going on adventures in the outdoors."

};
const david = {
    "name": "David Estrada",
    "major": "Computer Science",
    "grade": "Senior",
    "expectedGraduation": "May 2022",
    "postGradPlans": "Get a job so I can make enough money to buy a boat",
    "hobbies": "I love the outdoors. I'm big into fishing and hunting. I also love music. I love playing the drums and guitar, and I love listening to music."
};

usArray[0] = john;
usArray[1] = tanner;
usArray[2] = david;

function set_gallery(index) {
    var imageObject = document.getElementById('about_gallery');
    imageObject.src = imageArray[index];
    var name = document.getElementById('name');
    var major = document.getElementById('major');
    var grade = document.getElementById('grade');
    var graduation = document.getElementById('graduation');
    var plans = document.getElementById('plans');
    var hobbies = document.getElementById('hobbies');

    name.textContent = usArray[index].name;
    major.textContent = usArray[index].major;
    grade.textContent = usArray[index].grade;
    graduation.textContent = usArray[index].expectedGraduation;

    plans.textContent = usArray[index].postGradPlans;
    hobbies.textContent = usArray[index].hobbies;
}

function initialize_gallery() {
    imageCounter = 0;
    set_gallery(0);
  
}

function gallery_next() {
    if(imageCounter == 2) {
        imageCounter = 0;
    }
    else {
        imageCounter ++;
    }
    set_gallery(imageCounter);
}

function gallery_previous() {
    if(imageCounter == 0) {
        imageCounter = 2;
    }
    else {
        imageCounter --;
    }
    set_gallery(imageCounter);
}