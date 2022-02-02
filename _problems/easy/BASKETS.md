---
{"category_name":"easy","problem_code":"BASKETS","problem_name":"Carry All Fruits","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/1tx_qiU-eyw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"utkarsh_25dec","problem_tester":"","date_added":"14-12-2020","tags":{"0":"ad","1":"binary","2":"cook125","3":"easy","4":"rajarshi_basu","5":"utkarsh_25dec"},"problem_difficulty_level":"Easy-Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/BASKETS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BASKETS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK125/hindi/BASKETS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/BASKETS.pdf), [Russian](https://www.codechef.com/download/translated/COOK125/russian/BASKETS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/BASKETS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/BASKETS.pdf) as well.

Chef wants to run a restaurant for $N$ days (numbered $1$ through $N$).

First, Chef needs to buy some plates. Each of these plates should have a positive integer *capacity*. Chef must decide in advance the number of plates $M$ to buy as well as their capacities (not necessarily the same for each plate). A plate with capacity $c$ cannot hold more than $c$ fruits and it is called *half-full* if it holds at least $ceil(c/2)$ fruits. Initially, all plates are empty and numbered $1$ through $M$.

Chef needs to satisfy his guests on each of the $N$ days. For each day $i$:
- On the morning of this day, Chef unlocks an infinite supply of fruit of the $i$-th type. He may use these fruits any number of times during the $i$-th day and all days that follow.
- In the afternoon, he may choose up to $4$ fruits and add them to some of the plates. The fruits may be of any types (possibly the same type) and they may be added to any plates independently from each other (possibly all to the same plate). For example, if this is the $5$-th day and Chef has $3$ plates, he may choose fruits of types $\{1, 1, 3, 4\}$, add fruits of types $1$ and $4$ to the second plate and fruits of types $1$ and $3$ to the third plate.
- By the evening of this day, he must present a single plate containing at least one of each type of fruit between $1$ and $i$ inclusive. Additionally, the plate must be at least half-full, otherwise it would look empty and his guests would not be satisfied.

Note that the same plate may be presented multiple times. When a plate is presented, the fruits on it remain (do not get eaten).

Help Chef decide the number of plates, the capacity of each plate, as well as the types of fruits to pick each day and the plates to add them to. Chef does not need to minimise the number of plates or their capacities, but the number of plates must not exceed $1,000$ and their capacities must not exceed $N$. You may find any valid solution. It is guaranteed that under the given constraints, a solution always exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $N$.

### Output
For each test case:
- First, print a line containing a single integer $M$ ― the number of plates Chef should use ($M$ must not exceed $1,000$).
- Then, print a line containing $M$ space-separated integers $C_1, C_2, \ldots, C_M$ ― the capacities of the plates ($1 \le C_i \le N$ for each valid $i$).
- Next, for each day $i$ from $1$ to $N$:
    - Print a line containing a single integer $K_i$ ― the number of fruits Chef should pick on the $i$-th afternoon ($1 \le K_i \le 4$).
    - Then, print $K_i$ lines describing these fruits. Each of these lines should contain two space-separated integers $F$ and $P$ ($1 \le F \le i$, $1 \le P \le M$) ― the type of added fruit and the plate to which it should be added.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- the sum of $N$ over all test cases does not exceed $10^5$

### Example Input
```
1
3
```

### Example Output
```
3
1 2 3
4
1 1
1 2
1 2
1 3
1
2 3
1
3 3
```

### Explanation
Chef can use $3$ plates with capacities $1$, $2$ and $3$ in this order. In the morning on the $1$-st day, fruit of type $1$ becomes available to Chef. He can transfer $1$ fruit of type $1$ to each of plates $1$, $3$ and $2$ fruits of type $1$ to plate $2$. Afterwards, plates $1$ and $2$ satisfy both our conditions (they contain fruits of all the types till now and are at least half-filled). 

In the morning on the $2$-nd day, Chef gets the supply of fruit of type $2$. He can transfer $1$ fruit of type $2$ to plate $3$. Now plate $3$ satisfies the required conditions.

Then, in the afternoon on the $3$-rd day, Chef can add a fruit of type $3$ to plate $3$, so that this plate satisfies the required conditions. This is one possible solution.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>