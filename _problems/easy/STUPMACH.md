---
{"category_name":"easy","problem_code":"STUPMACH","problem_name":"Stupid Machine","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3\r\n2 1 3","output":4,"explanation":"**Example case 1:** The optimal way is to perform the following operations:\r\n- Choose $L = 3$ and use the machine to put one token in each box.\r\n- Choose $L = 1$ and use the machine to put one more token in the first box.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/3TBU7wM5WV4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"i_love_islam","problem_tester":"","date_added":"26-12-2019","tags":{"0":"cakewalk","1":"deadwing97","2":"i_love_islam","3":"ltime79"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/STUPMACH","time":{"view_start_date":1577552402,"submit_start_date":1577552402,"visible_start_date":1577552402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STUPMACH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME79/hindi/STUPMACH.pdf),[Bengali](https://www.codechef.com/download/translated/LTIME79/bengali/STUPMACH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME79/mandarin/STUPMACH.pdf), [Russian](https://www.codechef.com/download/translated/LTIME79/russian/STUPMACH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME79/vietnamese/STUPMACH.pdf) as well.

As usual, I went to work in the morning. Unfortunately, I found out that my manager bought a new machine and I have to learn to operate it.

There are $N$ boxes in a line (numbered $1$ through $N$). Initially, the boxes are empty, and I need to use the machine to put tokens in them. For each valid $i$, the $i$-th box has a maximum capacity $S_i$ tokens. I can perform the following operation any number of times: choose an integer $L$ ($1 \le L \le N$) and put one token in each of the boxes $1, 2, \ldots, L$.

My manager told me to put as many tokens as possible into the boxes in total (the distribution of tokens in the boxes does not matter). Of course, it is not allowed to perform an operation that would result in the number of tokens in some box exceeding its capacity. Can you help me calculate the maximum number of tokens that can be put in these boxes?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $S_1, S_2, \ldots, S_N$.

### Output
For each test case, print a single line containing one integer - the maximum number of tokens.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^6$
- $1 \le S_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^6$

### Subtasks
**Subtask #1 (50 points):**
- $1 \le N \le 1,000$
- $1 \le S_i \le 1,000$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
3
2 1 3
```

### Example Output
```
4
```

### Explanation
**Example case 1:** The optimal way is to perform the following operations:
- Choose $L = 3$ and use the machine to put one token in each box.
- Choose $L = 1$ and use the machine to put one more token in the first box.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>