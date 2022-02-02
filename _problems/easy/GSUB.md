---
{"category_name":"easy","problem_code":"GSUB","problem_name":"Chef Likes Good Sequences","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n5 2\r\n1 1 2 5 2\r\n1 3\r\n4 2","output":"5\r\n3","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/X80MutFOs4I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"","date_added":"13-10-2020","tags":{"0":"ad","1":"easy","2":"ltime89","3":"mohammed200218","4":"mohammed200218","5":"psychik"},"problem_difficulty_level":"Easy","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/GSUB","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GSUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME89/hindi/GSUB.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME89/bengali/GSUB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME89/mandarin/GSUB.pdf), [Russian](https://www.codechef.com/download/translated/LTIME89/russian/GSUB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME89/vietnamese/GSUB.pdf) as well.

Chef calls a sequence *good* if it does not contain any two adjacent identical elements.

Initially, Chef has a sequence $a_1, a_2, \ldots, a_N$. He likes to change the sequence every now and then. You should process $Q$ queries. In each query, Chef chooses an index $x$ and changes the $x$-th element of the sequence to $y$. After each query, can you find the length of the longest good **subsequence** of the current sequence?

Note that the queries are not independent.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- $Q$ lines follow. Each of these lines contains two space-separated integers $x$ and $y$ describing a query.

### Output
After each query, print a single line containing one integer ― the length of the longest good subsequence.

### Constraints
- $1 \le T \le 5$
- $1 \le N, Q \le 10^5$
- $1 \le a_i \le 10^9$ for each valid $i$
- $1 \le x \le N$
- $1 \le y \le 10^9$

### Subtasks
**Subtask #1 (35 points):** $Q = 1$

**Subtask #2 (65 points):** original constraints

### Example Input
```
1
5 2
1 1 2 5 2
1 3
4 2
```

### Example Output
```
5
3
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>