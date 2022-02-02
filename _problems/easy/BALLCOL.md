---
{"category_name":"easy","problem_code":"BALLCOL","problem_name":"Colliding Balls","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/CetW94i2U2c","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"9-10-2019","tags":{"0":"jtnydv25"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BALLCOL","time":{"view_start_date":1136053800,"submit_start_date":1136053800,"visible_start_date":1136053800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BALLCOL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There are $n$ red balls kept on the positive $X$ axis, and $m$ blue balls kept on the positive $Y$ axis. You are given the positions of the balls. For each $i$ from $1$ to $n$, the $i$-th red ball has the coordinates $(x_i, 0)$, where $x_i$ is a positive integer. For each $i$ from $1$ to $m$, the $i$-th blue ball has the coordinates $(0, y_i)$, where $ y_i$ is a positive integer. 

It is given that all $x_i$ are distinct. Also, all $y_i$ are distinct.

At the time $t= 0$, for each $i$ from $1$ to $n$, the $i^{\text{th}}$ red ball is thrown towards positive $Y$ axis with a speed of $u_i$( that is, with velocity vector $(0, u_i)$). Simultaneously (at time $t = 0$), for each $i$ from $1$ to $m$, the $i^{\text{th}}$ blue ball is thrown towards positive $X$ axis with a speed of $v_i$ (that is, with velocity vector $(v_i, 0)$).

Two balls are said to collide if they are at the same position at the same time. When two balls collide, they disappear, and hence no longer collide with other balls. (See sample examples for clarification).

Find the total number of collisions the balls will have.

### Input
- First line contains $n$ and $m$, the number of red balls, and the number of blue balls, respectively. 
- $i^{\text{th}}$  of the next $n$ lines contains two space separated integers $x_i$ and $u_i$, the position and speed of the $i^{\text{th}}$  red ball respectively
- $i^{\text{th}}$  of the next $m$ lines contains two space separated integers $y_i$ and $v_i$, the position and speed of the $i^{\text{th}}$  blue ball respectively

### Output
Print the number of collisions.

### Constraints 
- $1 \le n, m \le 10^5$
- $1 \le x_i, u_i, y_i, v_i \le 10^9$
- for all $1 \le i \lt j \le n, x_i \neq x_j$
- for all $1 \le i \lt j \le m, y_i \neq y_j$

### Example Input 1
```
1 1
1 2
2 1
```

### Example Output 1
```
1
```

### Example Input 2
```
1 2
1 2
2 1
1 2
```

### Example Output 2
```
1
```

### Explanation
**Example case 1:** The balls collide at t = 1, at the coordinates (1, 2). 

**Example case 2:** The red ball and the second blue ball collide at time 0.5 at coordinates (1, 1). Note that the first blue ball would have collided with the red ball at t = 1 (like in sample input # 1), if the second blue ball wasn't present. But since the red ball disappears at t = 0.5, its collision with first blue ball doesn't happen. The total number of collisions is 1.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>