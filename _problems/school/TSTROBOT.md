---
{"category_name":"school","problem_code":"TSTROBOT","problem_name":"Testing Robot","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"28-03-2019","tags":{"0":"cakewalk","1":"kingofnumbers","2":"ltime70","3":"simulation","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/TSTROBOT","time":{"view_start_date":1553965202,"submit_start_date":1553965202,"visible_start_date":1553965202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME70/mandarin/TSTROBOT.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME70/bengali/TSTROBOT.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME70/hindi/TSTROBOT.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME70/russian/TSTROBOT.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME70/vietnamese/TSTROBOT.pdf) as well.

Chef has bought a new robot, which will be used for delivering dishes to his customers. He started testing the robot by letting it move on a line.

Initially, the robot is placed at the coordinate $x = X$. Then, it should execute a sequence of $N$ commands, described by a string $S$ with length $N$. Each character of this string is either 'L' or 'R', denoting that the robot should walk one step to the left (decreasing $x$ by $1$) or to the right (increasing $x$ by $1$), respectively.

How many distinct points are visited by the robot when it has executed all the commands? A point $p$ is visited by the robot if $p$ is an integer and the robot's position before or after executing some command is $x = p$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $X$.
- The second line contains a single string $S$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the number of points visited by the robot.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 100$
- $|X| \le 1,000,000$
- $S$ contains only characters 'L' and 'R'

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
6 10
RRLLLL
2 0
LL
```

### Example Output
```
5
3
```

### Explanation
**Example case 1:** The robot followed the path $10 \rightarrow 11 \rightarrow 12 \rightarrow 11 \rightarrow 10 \rightarrow 9 \rightarrow 8$.

**Example case 2:** The robot followed the path $0 \rightarrow -1 \rightarrow -2$.
