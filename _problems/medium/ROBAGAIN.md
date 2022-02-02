---
{"category_name":"medium","problem_code":"ROBAGAIN","problem_name":"Robots Again","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"25-10-2018","tags":{"0":2,"1":"admin2","2":"ltime65","3":"medium","4":"observations","5":"scc","6":"simulation","7":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/ROBAGAIN","time":{"view_start_date":1540659601,"submit_start_date":1540659601,"visible_start_date":1540659601,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Mandarin](http://www.codechef.com/download/translated/LTIME65/mandarin/ROBAGAIN.pdf) , [Bengali](http://www.codechef.com/download/translated/LTIME65/bengali/ROBAGAIN.pdf) , [Hindi](http://www.codechef.com/download/translated/LTIME65/hindi/ROBAGAIN.pdf) , [Russian](http://www.codechef.com/download/translated/LTIME65/russian/ROBAGAIN.pdf) and [Vietnamese](http://www.codechef.com/download/translated/LTIME65/vietnamese/ROBAGAIN.pdf) as well.

You are given a string $s$ with length $N$ describing a row of cells numbered $1$ through $N$. Each character of this string is either a digit ('0' through '9', inclusive) or a dot ('.'). For each $i$ ($1 \le i \le N$), if the $i$-th character of $s$ is '.', the $i$-th cell is empty; if this character is the digit $d$, the $i$-th cell contains a robot that is able to move in a fixed range — between cells $\mathrm{max}(1, i-d)$ and $\mathrm{min}(N, i+d)$ inclusive.

When you start a robot and provide it with a direction (left or right), it starts moving in that direction. In one step, a robot can move one cell to the left or right. The robot keeps moving in the chosen direction until it reaches the last cell in its range, at which point it starts moving in the opposite direction (this may happen before the robot's first step, in which case it immediately starts moving in the opposite direction) until it reaches the other end of its range, when it again reverses direction and keeps moving, etc. This way, a lone robot would move forever. Assume that a robot can turn around instantly.

You are a robot operator. You want to determine an initial direction for each robot (either to the left or to the right, not necessarily the same for each robot) in such a way that after they are all started at the same time, a collision between two robots never happens, no matter how long they keep moving. A collision between two robots happens if they occupy the same cell in some step. Note that the robots are allowed to cross each other's paths, i.e. a collision does not happen if there are two robots in cells $x$ and $x+1$ in some step, but in the next step, the robot from cell $x$ moves to cell $x+1$ and the robot from cell $x+1$ moves to cell $x$.

Find out if it is possible to assign initial directions to robots in such a way.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $s$.

### Output
For each test case, print a single line containing the string `"safe"` if a valid assignment of directions exists or `"unsafe"` otherwise (without quotes).

### Constraints
- $1 \le T \le 5 * 10^4$
- $1 \le N \le 5 * 10^4$
- $s$ contains only characters '.' and '0' through '9'
- the sum of $N$ over all test cases does not exceed $3 * 10^5$

### Subtasks
**Subtask #1 (30 points):**    
- $1 \le T \le 10^2$
- $1 \le N \le 10^2$
- The sum of $N$ over all test cases does not exceed $3 * 10^2$

**Subtask #2 (70 points):** original constraints


### Example Input
```
3
1.1
2..1.
1..2
```

### Example Output
```
unsafe
safe
safe
```

### Explanation
**Example case 1**: Whatever directions you provide to the robots, they will both move to cell $2$ in the first step.

**Example case 2**: If both robots are directed to the right, they will never collide with each other.

**Example case 3**: Whatever directions you provide to the robots, they will keep crossing each other's paths, but will never collide.
