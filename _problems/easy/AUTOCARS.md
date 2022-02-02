---
{"category_name":"easy","problem_code":"AUTOCARS","problem_name":"Autonomous Cars","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"17-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You are in the future. It's the time of autonomous cars. Switching lanes is a pretty difficult task for autonomous cars, and you have the logs from an experiment you had run with two cars. You want to verify whether the logs are corrupted, or could be valid.

In that experiment, you had a highway consisting of two lanes. These were represented by 2 rows of an infinite grid. The cell (1, 1) is the top left cell which is the starting point of the first lane. Cell (2, 1) is the bottom left cell of the grid which is the starting point of the second lane.

There are two cars, 1 and 2 that start from the cell (1, 1) and (2, 1). 

At each instant, a car has the following choices.
- Stay at the current position.
- Move one cell to the right.
- Switch Lanes. When a car switches its lane, it stays in the same column. That is, from (1, i) it could go to (2, i), or from (2, i) it could go to (1, i). But both both cars shouldn't end up at the same cell at any point. Note that there could have been a car which had moved at the very instant that you move into it.

Consider one such scenario of driving cars.

Time $t = 0$
```
1.....
2.....
```

Time $t = 1$. Car 2 advances one cell right. Car 1 stays at the same place.
```
1.....
.2....
```

Time $t = 2$. Car 2 stays at its place. Car 1 switches the lane.
```
......
12....
```

Time $t = 3$. Car 2 moves one cell to the right.  Car 1 also moves one cell to the right.
```
......
.12...
```

Time $t = 4$. Both the cars stay in the same place.
```
......
.12...
```

You are given positions of the car at $n$ instants. Your task is to check whether this situation is feasible or not.

### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The first line of each test case contains an integer $n$ denoting the number of instants where the positions of the cars were recorded.
- Each of next $n$ lines contains 5 space separated integers denoting $t_i, x_i, y_i, X_i, Y_i$ denoting time, $x$ and $y$ coordinate of the first car, and that of second car.

### Output
For each test case, output either `yes` or `no` according to the answer to the problem.

###Constraints
- $1 \le T \le 10^5$
- $1 \le n \leq 10^5$
- $1 \le t_i, y_i, X_i, Y_i \leq 10^9$
- $1 \leq x_i \leq 2$
- $t_i < t_{i+1}$
- Sum of $n$ over all the test cases doesn't exceed $10^6$

### Example Input
```
2
3
1 1 1 2 2
2 2 1 2 2
4 2 2 2 3
1
1 1 3 2 2
```

### Example Output
```
yes
no
```