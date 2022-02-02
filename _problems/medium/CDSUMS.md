---
{"category_name":"medium","problem_code":"CDSUMS","problem_name":"Counting Spaghetti","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1 2\r\n3 5","output":"3\r\n7","explanation":"","isDeleted":false}}},"video_editorial_url":"https://youtu.be/oju2l9G7m2A","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mohammed200218","problem_tester":"","date_added":"17-10-2020","tags":{"0":"ltime89","1":"math","2":"medium","3":"mohammed200218","4":"mohammed200218","5":"quadratic"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CDSUMS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CDSUMS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME89/hindi/CDSUMS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME89/bengali/CDSUMS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME89/mandarin/CDSUMS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME89/russian/CDSUMS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME89/vietnamese/CDSUMS.pdf) as well.

During a boring night at the restaurant, Chef decided to play with spaghetti. He has $R-L+1$ spaghetti: exactly one spaghetti with each length between $L$ and $R$ inclusive.

Chef decided to take some of his spaghetti and stick them together to form one very long spaghetti. The length of this spaghetti is the sum of the lengths of the spaghetti he took. In particular, he may take all spaghetti and he may take only one spaghetti as well. How many different spaghetti can he make?

Two spaghetti are considered different if their lengths are different.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$.

### Output
For each test case, print a single line containing one integer ― the number of different spaghetti Chef can make.

### Constraints
- $1 \le T \le 1,000$
- $1 \le L, R \le 10^9$

### Subtasks
**Subtask #1 (25 points):** $L = 1$

**Subtask #2 (55 points):** $L, R \le 10^4$

**Subtask #3 (20 points):** original constraints

### Example Input
```
2
1 2
3 5
```

### Example Output
```
3
7
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>