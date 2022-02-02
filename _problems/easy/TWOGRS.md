---
{"category_name":"easy","problem_code":"TWOGRS","problem_name":"Two Groups","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n3 3 3\r\n3 2 3\r\n1 1 2\r\n1 0 1\r\n1 1 1","output":"YES\r\nYES\r\nNO\r\nNO\r\nYES","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mhammad1","problem_tester":null,"date_added":"21-09-2019","tags":{"0":"cook110","1":"maths","2":"mhammad1","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TWOGRS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TWOGRS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK110/hindi/TWOGRS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK110/mandarin/TWOGRS.pdf), [Russian](https://www.codechef.com/download/translated/COOK110/russian/TWOGRS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK110/vietnamese/TWOGRS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK110/bengali/TWOGRS.pdf) as well.

This problem has no story, so we at least wish you good luck solving it.

Consider a multiset $S$ which contains $A$ copies of the integer $1$, $B$ copies of $2$ and $C$ copies of $3$. For example, if $A = 3$, $B = 3$ and $C = 3$, then $S = \{1, 1, 1, 2, 2, 2, 3, 3, 3\}$.

Your goal is to divide the elements of $S$ into two groups (multisets); each element of $S$ must be in exactly one of these groups and the sum of elements of one group must be equal to the sum of elements of the other group. In our example, it is possible to make the groups $\{1, 1, 2, 2, 3\}$ and $\{1, 2, 3, 3\}$; the sum of elements of each group is $9$.

Determine if it is possible to make such groups.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $A$, $B$ and $C$. 

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to create two groups with equal sums or `"NO"` if it is impossible.

### Constraints
- $1 \le T \le 1,000$
- $0 \le A, B, C \le 1,000,000$
- $A + B + C \ge 1$

### Example Input
```
5
3 3 3
3 2 3
1 1 2
1 0 1
1 1 1
```

### Example Output
```
YES
YES
NO
NO
YES
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>