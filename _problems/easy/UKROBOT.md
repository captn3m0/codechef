---
{"category_name":"easy","problem_code":"UKROBOT","problem_name":"Robot Detector","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/OJCAwjHN3S8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"anton_trygub","problem_tester":"","date_added":"14-09-2020","tags":{"0":"anton_trygub","1":"easy","2":"ltime88","3":"math","4":"observation","5":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UKROBOT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UKROBOT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME88/hindi/UKROBOT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME88/bengali/UKROBOT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME88/mandarin/UKROBOT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME88/russian/UKROBOT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME88/vietnamese/UKROBOT.pdf) as well.

There is a robot in the cell $(0, 0)$ of an infinite grid. One cell $(X, Y)$ contains an obstacle and all other cells are free. We only know that $1 \le X \le R$ and $1 \le Y \le C$, but not the exact location of the obstacle.

You may give the robot a sequence of instructions. There are four types of instructions:
- L: move one cell to the left, i.e. from a cell $(x, y)$ to $(x-1, y)$
- R: move one cell to the right, i.e. from a cell $(x, y)$ to $(x+1, y)$
- D: move one cell down, i.e. from a cell $(x, y)$ to $(x, y-1)$
- U: move one cell up, i.e. from a cell $(x, y)$ to $(x, y+1)$

The robot attempts to perform these instructions one by one. When performing an instruction, if the cell it needs to move to is free, then it moves to that cell; otherwise, it stays in its current cell.

Consider the following process: you choose a fixed sequence of instructions for the robot, which performs these instructions; then you are given the final cell of the robot and based on only that information, you determine the position of the obstacle. Find a sufficiently short sequence of instructions such that if this process was performed, you would always be able to correctly determine the position of the obstacle. It can be proved that for the given constraints, such a sequence always exists.

### Input
The first and only line of the input contains two space-separated integers $R$ and $C$.

### Output
Print a single line containing one string, which should describe the sequence of instructions for the robot. This string may only contain the characters 'L', 'R', 'U' and 'D', and its length must not exceed $10^4$.

### Constraints
- $1 \le R, C \le 20$

### Subtasks
**Subtask #1 (5 points):** $R = 1, C = 20$

**Subtask #2 (20 points):** $R = 5, C = 5$

**Subtask #3 (75 points):** original constraints

### Example Input
```
1 2
```

### Example Output
```
UR
```

### Explanation
If the obstacle is in the cell $(1, 1)$, the robot ends up in the cell $(0, 1)$. Otherwise, i.e. if the obstacle is in the cell $(1, 2)$, the robot ends up in $(1, 1)$. The final position of the robot would always be enough to find the obstacle.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>