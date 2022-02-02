---
{"category_name":"easy","problem_code":"MSV","problem_name":"Chef and Maximum Star Value","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n7\r\n8 1 28 4 2 6 7","output":3,"explanation":"$A_5 = 2$ divides $4$, $28$ and $8$, so its star value is $3$. There is no element with a higher star value.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shubhankarbj","problem_tester":null,"date_added":"3-08-2019","tags":{"0":"easy","1":"number","2":"oct19","3":"r_64","4":"shubhankarbj"},"problem_difficulty_level":"Easy","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/MSV","time":{"view_start_date":1571045400,"submit_start_date":1571045400,"visible_start_date":1571045400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MSV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT19/hindi/MSV.pdf), [Bengali](https://www.codechef.com/download/translated/OCT19/bengali/MSV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT19/mandarin/MSV.pdf), [Russian](https://www.codechef.com/download/translated/OCT19/russian/MSV.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT19/vietnamese/MSV.pdf) as well.

You are given a sequence $A_1, A_2, \ldots, A_N$. For each valid $i$, the *star value* of the element $A_i$ is the number of valid indices $j \lt i$ such that $A_j$ is divisible by $A_i$.

Chef is a curious person, so he wants to know the maximum star value in the given sequence. Help him find it.

### Input
-  The first line of the input contains a single integer $T$ which denotes the number of test cases.
- The first line of each test case contains a single integer $N$ .
- The second line of each test case contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum star value.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^6$ for each valid $i$   
- Sum of $N$ over all test cases does not exceed $100,000$.
### Subtasks
**Subtask #1 (20 points):** sum  of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
7
8 1 28 4 2 6 7
```

### Example Output
```
3
```

### Explanation
$A_5 = 2$ divides $4$, $28$ and $8$, so its star value is $3$. There is no element with a higher star value.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>