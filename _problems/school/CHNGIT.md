---
{"category_name":"school","problem_code":"CHNGIT","problem_name":"Change It","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5\r\n1 1 1 1 1\r\n4\r\n9 8 1 8\r\n2\r\n1 9","output":"0\r\n2\r\n1","explanation":"**Example case 1:** No moves are needed since all the elements are already equal.\r\n\r\n**Example case 3:** We can perform one move on either $A_1$ or $A_2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"15-12-2019","tags":{"0":"cakewalk","1":"cook113","2":"greedy","3":"kmaaszraa","4":"kmaaszraa"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHNGIT","time":{"view_start_date":1577041202,"submit_start_date":1577041202,"visible_start_date":1577041202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHNGIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK113/hindi/CHNGIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK113/mandarin/CHNGIT.pdf), [Russian](https://www.codechef.com/download/translated/COOK113/russian/CHNGIT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK113/vietnamese/CHNGIT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK113/bengali/CHNGIT.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. You want all the elements of the sequence to be equal. In order to achieve that, you may perform zero or more moves. In each move, you must choose an index $i$ ($1 \le i \le N$), then choose $j = i-1$ or $j = i+1$ (it is not allowed to choose $j = 0$ or $j = N+1$) and change the value of $A_i$ to $A_j$ — in other words, you should replace the value of one element of the sequence by one of its adjacent elements.

What is the minimum number of moves you need to make in order to make all the elements of the sequence equal?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the minimum required number of moves.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $1 \le A_i \le 100$ for each valid $i$

### Example Input
```
3
5
1 1 1 1 1
4
9 8 1 8
2
1 9
```

### Example Output
```
0
2
1
```

### Explanation
**Example case 1:** No moves are needed since all the elements are already equal.

**Example case 3:** We can perform one move on either $A_1$ or $A_2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>