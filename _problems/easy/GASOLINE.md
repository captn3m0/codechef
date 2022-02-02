---
{"category_name":"easy","problem_code":"GASOLINE","problem_name":"Gasoline","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n1 1 1\r\n1 1 1\r\n3\r\n3 0 0\r\n10 0 0\r\n3\r\n3 3 3\r\n3 2 1","output":"3\r\n30\r\n3","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/9IgTFHyM-10","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"27-11-2020","tags":{"0":"easy","1":"greedy","2":"ildar_adm","3":"ltime90"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GASOLINE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GASOLINE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME90/hindi/GASOLINE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME90/bengali/GASOLINE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME90/mandarin/GASOLINE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME90/russian/GASOLINE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME90/vietnamese/GASOLINE.pdf) as well.

There are $N$ cars (numbered $1$ through $N$) on a circular track with length $N$. For each $i$ ($2 \le i \le N$), the $i$-th of them is at a distance $i-1$ clockwise from car $1$, i.e. car $1$ needs to travel a distance $i-1$ clockwise to reach car $i$.

For each valid $i$, you can fill the $i$-th car's tank with up to $f_i$ litres of gasoline, with cost $c_i$ coins per litre.

After that, you choose some car, sit in this car and start driving in the clockwise direction. To move one unit of distance in this direction, you need to spend $1$ litre of gasoline. When you pass another car (even if you'd run out of gasoline exactly at that point), you steal all its gasoline. You cannot move if you do not have any gasoline left.

Your goal is to fill the cars in such a way that you are able to choose an optimal car, travel the clockwise distance $N$ and return to the place where you were initially. Under this constraint, you want to pay the least possible number of coins.

Find the smallest number of coins you need to pay. It is guaranteed that there is a way to travel the distance $N$. It can be proved that in such a case, the smallest number of coins is always an integer.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $f_1, f_2, \ldots, f_N$.
- The third line contains $N$ space-separated integers $c_1, c_2, \ldots, c_N$.

### Output
For each test case, print a single line containing one integer ― the smallest possible number of coins you need to pay.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 200,000$
- $0 \le f_i \le 10^9$ for each valid $i$
- $0 \le c_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):** $N \le 2,000$

**Subtask #2 (90 points):** original constraints

### Example Input
```
3
3
1 1 1
1 1 1
3
3 0 0
10 0 0
3
3 3 3
3 2 1
```

### Example Output
```
3
30
3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>