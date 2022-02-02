---
{"category_name":"school","problem_code":"GROUPS","problem_name":"Chef and Groups","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4\r\n000\r\n010\r\n101\r\n01011011011110","output":"0\r\n1\r\n2\r\n4","explanation":"**Example case 1:** Since all seats are empty, the number of groups is $0$.\r\n\r\n**Example case 2:** Since only one seat is occupied, the number of groups is $1$.\r\n\r\n**Example case 3:** Here, two seats are occupied, but since they are not adjacent, the people sitting on them belong to different groups.\r\n\r\n**Example case 4:** Here, we have $4$ groups of friends with size $1$, $2$, $2$ and $4$ respectively. That is, first group is sitting at $2$nd seat, second group at $4$th and $5$th seat, third group at  $7$th and $8$th seat and fourth group at $10$th to $13$th seat.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/SaZ9_WILbmI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smit_adm","problem_tester":"","date_added":"9-01-2021","tags":{"0":"march21","1":"simple","2":"smit_adm"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GROUPS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GROUPS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/MARCH21/bengali/GROUPS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MARCH21/mandarin/GROUPS.pdf), [Russian](https://www.codechef.com/download/translated/MARCH21/russian/GROUPS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MARCH21/vietnamese/GROUPS.pdf) as well.

There are $N$ seats in a row. You are given a string $S$ with length $N$; for each valid $i$, the $i$-th character of $S$ is '0' if the $i$-th seat is empty or '1' if there is someone sitting in that seat.

Two people are friends if they are sitting next to each other. Two friends are always part of the same group of friends. Can you find the total number of groups? 

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$. 

### Output
For each test case, print a single line containing one integer ― the number of groups.

### Constraints
- $1 \leq T \leq 50$
- $1 \leq N \leq 10^5$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
4
000
010
101
01011011011110
```

### Example Output
```
0
1
2
4
```

### Explanation
**Example case 1:** Since all seats are empty, the number of groups is $0$.

**Example case 2:** Since only one seat is occupied, the number of groups is $1$.

**Example case 3:** Here, two seats are occupied, but since they are not adjacent, the people sitting on them belong to different groups.

**Example case 4:** Here, we have $4$ groups of friends with size $1$, $2$, $2$ and $4$ respectively. That is, first group is sitting at $2$nd seat, second group at $4$th and $5$th seat, third group at  $7$th and $8$th seat and fourth group at $10$th to $13$th seat.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>