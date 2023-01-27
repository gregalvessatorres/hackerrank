function reverseArray(a) {
    let reverse = [];
    let count = a.length - 1;

    while(count >=0){
        reverse.push(a[count]);
        count --;
    }
    return reverse;
}