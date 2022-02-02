---
{"category_name":"hard","problem_code":"CIRCLEAT","problem_name":"Circle Eating","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n1 2 3\r\n3\r\n-10 -20 30\r\n3\r\n-1 0 0","output":"1\r\n-10\r\n-1","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/9Kwzg8wODJE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"27-11-2020","tags":{"0":"binary","1":"data","2":"hard","3":"ildar_adm","4":"ltime90","5":"range"},"problem_difficulty_level":"Hard","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/CIRCLEAT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CIRCLEAT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME90/hindi/CIRCLEAT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME90/bengali/CIRCLEAT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME90/mandarin/CIRCLEAT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME90/russian/CIRCLEAT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME90/vietnamese/CIRCLEAT.pdf) as well.

There are $N$ candies (numbered $1$ through $N$) on a circular table. For each valid $i$, candies $i$ and $i+1$ are adjacent; candies $1$ and $N$ are also adjacent. You want to eat all these candies.

Initially, your *happiness level* is $0$. For each valid $i$, when you eat the $i$-th candy, the happiness level increases by $a_i$. Note that $a_i$ may be negative and your happiness level may also become negative.

First, you should eat the candy $1$. After that, while there is at least one uneaten candy, you may eat any candy that is adjacent to at least one of the candies eaten so far.

Your goal is to maximise the smallest value of your happiness during this process.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer ― the maximum possible minimum happiness value during the process.

### Constraints
- $1 \le T \le 200,000$
- $1 \le N \le 200,000$
- $|a_i| \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $200,000$

### Subtasks
**Subtask #1 (10 points):** $N \le 20$

**Subtask #2 (10 points):** $N \le 300$

**Subtask #3 (80 points):** original constraints

### Example Input
```
3
3
1 2 3
3
-10 -20 30
3
-1 0 0
```

### Example Output
```
1
-10
-1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>