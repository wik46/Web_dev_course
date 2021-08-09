// This is the module where the vector class is written.
// ======================================================

// Creating the VECTOR object.
var vector = {
    _x: 1,
    _y: 0,
    // Constructor.
    create: function(x, y){
        var obj = Object.create(this);
        obj.setX(x);
        obj.setY(y);

        return obj;
    },

    // Setters and getters.
    setX: function(val){
        this._x = val;
    },
    setY: function(val){
        this._y = val;
    },
    getX: function(){
        return this._x;
    },
    getY: function(){
        return this._y;
    },
    // Lengths
    getLength: function(){
        return Math.sqrt(this._x * this._x + this._y * this._y);
    },
    setLength: function(len){
        // Getting the angle before change.
        const angle = this.getAngle();
        // Setting x.
        this._x = len * Math.cos(angle);
        // Setting y.
        this._y = len * Math.sin(angle);
    },
    // Angles:
    getAngle: function(){
        return Math.atan2(this._y,this._x);
    },
    setAngle: function(angle){
        // Getting lenth before change.
        const len = this.getLength();
        // Setting x.
        this._x =  len * Math.cos(angle);
        // Setting y.
        this._y = len * Math.sin(angle);
    },
    // Vector arithmetic.
    // Note that all these functions do not change the vector, they return the new one.
    // 1. Vector addition.
    add: function(v1){
        return vector.create(this._x + v1.getX(), this._y + v1.getY());
    },
    // 2. Scalar multiplication.
    scalarMultiply: function(alpha){
        return vector.create(this._x * alpha, this._y * alpha);
    }

};

// POINT object.
// * This object takes position and velocity both into account.

var point = {
    // Initial position and velocity.
    // Note that both these entities are vectors.
    position: null,
    velocity: null,
    time: 0,

    // Constructor.
    create: function(x, y, speed, direction){
        var obj = Object.create(this);
        // This makes so that the centre is
        obj.position = vector.create(x ,y) ;
        obj.velocity = vector.create(0,0);
        // The magnitude of the velocity represents its speed.
        obj.velocity.setLength(speed);
        // The angle of its velocity represents its direction.
        obj.velocity.setAngle(direction);
        // Finished.
        return obj;
    },

    // This function is used to update the position of the point according to its 
    // position and velocity.

    // 1. Type of movement here is just linear.
    update1: function(){
        this.position = this.position.add(this.velocity);  
    },

    // 2. This type of movement wil represent draw the function given.
    updateWithFunction: function(inc){
        this.time += 0.01;
        this.position.setX(this.position.getX() - Math.sin(this.time));
    }
};