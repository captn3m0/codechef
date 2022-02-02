---
{"category_name":"medium","problem_code":"CHEFMOD","problem_name":"Chef and Modular Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n2\r\n100000006\r\n5","output":"3\r\n100000007\r\n11","explanation":"**Example case 1:** The sequence $S(2)$ is $2, 4, 8, \\ldots, 1, 2, \\ldots$ and thus, $D(S(2)) = 2 + 1 = 3$.\r\n\r\n**Example case 2:** The sequence is $10^8+6, 1, 10^8+6, 1, \\ldots$ and thus, $D(S(10^8+6)) = 10^8+6 + 1 = 10^8+7$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rahuldugar","problem_tester":"","date_added":"18-07-2020","tags":{"0":"cook120","1":"discrete","2":"medium","3":"primitive","4":"rahuldugar","5":"rajarshi_basu"},"problem_difficulty_level":"Medium-Hard","best_tag":"Primitive Root","editorial_url":"https://discuss.codechef.com/problems/CHEFMOD","time":{"view_start_date":1595183402,"submit_start_date":1595183402,"visible_start_date":1595183402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFMOD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK120/hindi/CHEFMOD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK120/mandarin/CHEFMOD.pdf), [Russian](https://www.codechef.com/download/translated/COOK120/russian/CHEFMOD.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK120/vietnamese/CHEFMOD.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK120/bengali/CHEFMOD.pdf) as well.

You are given an integer $A$. Let's define an infinite sequence $S(A) = A\%P, A^2\%P, A^3\%P, \ldots$, where $P = 10^8+7$ is a prime and $\%$ is the modulo operator.

Let's also define a decreasing sum $D(S)$ as the sum of all elements of a sequence $S$ which are strictly smaller than all preceding elements of $S$. When $S$ is a sequence of non-negative integers, the number of such elements is clearly finite.

Find $D(S(A))$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $A$.

### Output
For each test case, print a single line containing one integer $D(S(A))$.

### Constraints
- $1 \le T \le 500$
- $2 \le A < P$

### Example Input
```
3
2
100000006
5
```

### Example Output
```
3
100000007
11
```

### Explanation
**Example case 1:** The sequence $S(2)$ is $2, 4, 8, \ldots, 1, 2, \ldots$ and thus, $D(S(2)) = 2 + 1 = 3$.

**Example case 2:** The sequence is $10^8+6, 1, 10^8+6, 1, \ldots$ and thus, $D(S(10^8+6)) = 10^8+6 + 1 = 10^8+7$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>