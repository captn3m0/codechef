---
{"category_name":"school","problem_code":"EID2","problem_name":"Eidi Gift","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n5 7 10 10 20 50\r\n5 5 5 20 10 20\r\n10 1 17 5 10 15\r\n3 6 3 8 10 9\r\n8 5 5 50 10 10","output":"FAIR\r\nNOT FAIR\r\nNOT FAIR\r\nNOT FAIR\r\nFAIR","explanation":"**Example case 2:** All children have same age which is 5, but second child got less money than the other children, so it\u0027s not fair.\r\n\r\n**Example case 3:** First child is older than second child but he got less money than him, so it\u0027s not fair.\r\n\r\n**Example case 4:** First and third children have same age, but didn\u0027t get same amount of money,  so it\u0027s not fair.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"27-08-2019","tags":{"0":"cakewalk","1":"kingofnumbers","2":"ltime75","3":"taran_1407"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EID2","time":{"view_start_date":1567272600,"submit_start_date":1567272600,"visible_start_date":1567272600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EID2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME75/hindi/EID2.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME75/bengali/EID2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME75/mandarin/EID2.pdf), [Russian](https://www.codechef.com/download/translated/LTIME75/russian/EID2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME75/vietnamese/EID2.pdf) as well.

Eidi gifts are a tradition in which children receive money from elder relatives during the Eid celebration.

Chef has three children (numbered $1, 2, 3$) and he wants to give them Eidi gifts. The oldest child, Chefu, thinks that a distribution of money is fair only if an older child always receives more money than a younger child; if two children have the same age, they should receive the same amounts of money.

For each valid $i$, the $i$-th child is $A_i$ years old and it received $C_i$ units of money. Determine whether this distribution of money is fair.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains six space-separated integers $A_1$, $A_2$, $A_3$, $C_1$, $C_2$ and $C_3$.

### Output
For each test case, print a single line containing the string `"FAIR"` if the distribution is fair or `"NOT FAIR"` otherwise.

### Constraints
- $1 \le T \le 1,000$
- $1 \le A_1, A_2, A_3 \le 17$
- $1 \le C_1, C_2, C_3 \le 100$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
5
5 7 10 10 20 50
5 5 5 20 10 20
10 1 17 5 10 15
3 6 3 8 10 9
8 5 5 50 10 10
```

### Example Output
```
FAIR
NOT FAIR
NOT FAIR
NOT FAIR
FAIR
```

### Explanation

**Example case 2:** All children have same age which is 5, but second child got less money than the other children, so it's not fair.

**Example case 3:** First child is older than second child but he got less money than him, so it's not fair.

**Example case 4:** First and third children have same age, but didn't get same amount of money,  so it's not fair.




<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>