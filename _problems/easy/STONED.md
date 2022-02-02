---
{"category_name":"easy","problem_code":"STONED","problem_name":"F - Stone Land","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"adikr_singh","problem_tester":"","date_added":"6-04-2021","tags":{"0":"adikr_singh","1":"data","2":"easy","3":"segment","4":"spyb2021","5":"stack"},"problem_difficulty_level":"Easy-Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/STONED","time":{"view_start_date":1618509602,"submit_start_date":1618509602,"visible_start_date":1618509602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STONED","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
In a country **Stone Land**, there are $N$ stones arranged in a row from left to right. Each stone has some height represented by a positive number. The stones are numbered from $1$ to $N$ from left to right.

You are given an array **H** of size $N$ consisting of the height of the $N$ stones from left to
right.

Stone at $j^{th}$ position is visible from the stone at $i^{th}$ position if:-
1. $j>i$
2. $max(H[i],H[i+1],H[i+2],....,H[j-1])$ $<$ $H[j]$

You are asked $M$ queries.
- Each query consists of two different positions of stones $A$ and $B$.
- You have to Print the total number of stones that are visible from both the stones at the position $A$ and $B$.

### Input

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$, where $N$ is the number of stones and $M$ is the number of queries.
- The Second line consists of $N$ space-separated integers **(array H)** denoting the height of stones from left to the right separated by a space.
- Next, $M$ lines consist of two space-separated integers $A$ and $B$ separated by space where $A$ and $B$ are positions of stones.

### Constraints
- $1 \leq T \leq 5$
- $2 \leq N \leq 10^5$
- $1 \leq M \leq 10^5$
- $1 \leq H[i] \leq 10^9$, where **H[i]** denotes the height of $i^{th}$ stone, and $1 \leq i \leq N$
- $1 \leq A, B \leq N$
- It is guaranteed that the sum of $N$ over all test cases does not exceed $10^5$.
- It is guaranteed that the sum of $M$ over all test cases does not exceed $10^5$.

### Output
- For each query, print the total number of stones that are visible from both the stones at the position $A$ and $B$ in a new line.

### Example Input
```
1
6 6
3 10 20 20 5 50
1 2
2 4
4 3
4 5
1 3
4 4
```

### Example Output
```
2
1
1
1
1
1
```

### Explanation

**Query $1$**: Stone at position $1$ can see the stones at position $(2, 3, 6)$ whereas stone at position $2$ can see the stones at position $(3, 6)$. Thus, the total number of stones that are visible from both stones is $2$.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>