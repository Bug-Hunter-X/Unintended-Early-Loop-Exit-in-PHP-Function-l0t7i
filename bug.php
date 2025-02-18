function myFunc() {
  for ($i = 0; $i < 10; $i++) {
    // ... some code ...
    if (someCondition) {
      return; // This will exit the function prematurely 
    }
    // ... more code ...
  }
}

//The bug is the unintended early exit from the loop.  The return statement within the if condition exits the function entirely, potentially leaving the loop incomplete.

//Example where this is a problem:

// Intended to run 10 times, but stops early
function bugExample(){
    for ($i = 0; $i < 10; $i++) {
        if($i == 5){
            return;
        }
        echo "Loop iteration: " . $i . "\n";
    }
}
bugExample();