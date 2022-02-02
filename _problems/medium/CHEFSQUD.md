---
{"category_name":"medium","problem_code":"CHEFSQUD","problem_name":"Chefland Squads and the Army Chief","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n1\r\n1\r\n2\r\n2 1\r\n4\r\n4 3 2 1\r\n6\r\n5 4 3 2 6 1","output":"0\r\n0\r\n1\r\n1","explanation":"**Example case 1:** There is only one possible squad and its strength is $0$.\r\n\r\n**Example case 3:** There are $10$ possible squads, with strengths $(0, 0, 0, 0, 1, 1, 1, 3, 3, 6)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"2-05-2020","tags":{"0":"akashbhalotia","1":"binary","2":"cook118","3":"coordinate","4":"fenwick","5":"inversions","6":"medium","7":"rishup_nitdgp","8":"rishup_nitdgp","9":"segment","10":"two"},"problem_difficulty_level":"Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/CHEFSQUD","time":{"view_start_date":1590345002,"submit_start_date":1590345002,"visible_start_date":1590345002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFSQUD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK118/hindi/CHEFSQUD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK118/mandarin/CHEFSQUD.pdf), [Russian](https://www.codechef.com/download/translated/COOK118/russian/CHEFSQUD.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK118/vietnamese/CHEFSQUD.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK118/bengali/CHEFSQUD.pdf) as well.

The Chefland Army has $N$ soldiers, standing in a row and numbered $1$ through $N$ from left to right. Their heights from left to right are $A_1, A_2, \ldots, A_N$.

A *squad* consists of one or more consecutive soldiers, i.e. soldiers $L$ through $R$ (inclusive) for some $L$ and $R$ such that $1 \le L \le R \le N$. The *strength* of a squad is defined in the following way: for each soldier in this squad, find the number of soldiers in the squad with strictly greater heights that are standing to the left of this soldier, and sum up these numbers.

The Army Chief decided to write down the strengths of all possible squads, but soon, he realised that it is a heavy task. Therefore, he only wants to know the median of the strengths of all possible squads.

Note: The median of a sequence is the value that is in the middle when the sequence is sorted. If the length of the sequence is even, there are two values in the middle and the median is the smaller of these values (or either when they are equal).

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the median of the strengths of all squads.

### Constraints
- $1 \le T \le 500$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
4
1
1
2
2 1
4
4 3 2 1
6
5 4 3 2 6 1
```

### Example Output
```
0
0
1
1
```
	
### Explanation
**Example case 1:** There is only one possible squad and its strength is $0$.

**Example case 3:** There are $10$ possible squads, with strengths $(0, 0, 0, 0, 1, 1, 1, 3, 3, 6)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>