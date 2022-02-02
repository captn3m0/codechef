---
{"category_name":"easy","problem_code":"CHEFZRON","problem_name":"Escape One","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n0 0 0\r\n4\r\n1 0 1 0\r\n5\r\n1 1 0 1 0","output":"0\r\n2\r\n3","explanation":"**Example case 1:** The sequence is already good, so the answer is zero.\r\n\r\n**Example case 2:** We can make the sequence good in two operations, e.g. $[1, 0, 1, 0] \\rightarrow [0, 1, 1, 0] \\rightarrow [0, 0, 2, 0]$.\r\n\r\n**Example case 3:** We can make the sequence good in three operations, e.g. $[1, 1, 0, 1, 0] \\rightarrow [0, 2, 0, 1, 0] \\rightarrow [0, 2, 1, 0, 0] \\rightarrow [0, 3, 0, 0, 0]$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"17-05-2020","tags":{"0":"dynamic","1":"easy","2":"ltime84","3":"observation","4":"rishup_nitdgp","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CHEFZRON","time":{"view_start_date":1590858002,"submit_start_date":1590858002,"visible_start_date":1590858002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFZRON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME84/hindi/CHEFZRON.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME84/bengali/CHEFZRON.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME84/mandarin/CHEFZRON.pdf), [Russian](https://www.codechef.com/download/translated/LTIME84/russian/CHEFZRON.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME84/vietnamese/CHEFZRON.pdf) as well.

Chef has a sequence $A_1, A_2, \ldots, A_N$. The sequence is circular, i.e. for each valid $i$, elements $A_i$ and $A_{i+1}$ are considered adjacent, and elements $A_1$ and $A_N$ are also considered adjacent. Initially, each element of this sequence is either $1$ or $0$.

You may perform some operations on this sequence. In one operation, you should choose an index $i$ such that $A_i = 1$ and move that $1$ to one of its adjacent elements, i.e. change $A_i$ to $0$, choose one of the elements adjacent to $A_i$ and increment it by $1$.

According to Chef, a sequence is *good* if all its elements are different from $1$. You have to tell Chef the minimum number of operations needed to turn the sequence $A$ into a good sequence or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of required operations, or $-1$ if it is impossible to make the sequence good.

### Constraints
- $1 \le T \le 10^4$
- $3 \le N \le 10^6$
- $0 \le A_i \le 1$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^6$

### Subtasks
**Subtask #1 (30 points):**
- $N = 1,000$
- the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
3
0 0 0
4
1 0 1 0
5
1 1 0 1 0
```

### Example Output
```
0
2
3
```
	
### Explanation
**Example case 1:** The sequence is already good, so the answer is zero.

**Example case 2:** We can make the sequence good in two operations, e.g. $[1, 0, 1, 0] \rightarrow [0, 1, 1, 0] \rightarrow [0, 0, 2, 0]$.

**Example case 3:** We can make the sequence good in three operations, e.g. $[1, 1, 0, 1, 0] \rightarrow [0, 2, 0, 1, 0] \rightarrow [0, 2, 1, 0, 0] \rightarrow [0, 3, 0, 0, 0]$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>