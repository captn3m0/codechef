---
{"category_name":"easy","problem_code":"EXAMCHT","problem_name":"Exam Cheating","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 6","output":3,"explanation":"**Example case 1:** They can cheat for $p = 1$, $p = 2$ or $p = 4$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/yijCJ7i8DoE","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adarshag","problem_tester":"","date_added":"2-01-2020","tags":{"0":"adarshag","1":"cook114"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EXAMCHT","time":{"view_start_date":1579458602,"submit_start_date":1579458602,"visible_start_date":1579458602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXAMCHT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK114/hindi/EXAMCHT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK114/mandarin/EXAMCHT.pdf), [Russian](https://www.codechef.com/download/translated/COOK114/russian/EXAMCHT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK114/vietnamese/EXAMCHT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK114/bengali/EXAMCHT.pdf) as well.

Ram and Shyam are sitting next to each other, hoping to cheat on an exam. However, the examination board has prepared $p$ different sets of questions (numbered $0$ through $p-1$), which will be distributed to the students in the following way:
- The students are assigned roll numbers — pairwise distinct positive integers.
- If a student's roll number is $r$, this student gets the $((r-1)\%p)$-th set of questions.

Obviously, Ram and Shyam can cheat only if they get the same set of questions.

You are given the roll numbers of Ram and Shyam: $A$ and $B$ respectively. Find the number of values of $p$ for which they can cheat, or determine that there is an infinite number of such values.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $A$ and $B$.

### Output
For each test case, print a single line — the number of values of $p$ for which Ram and Shyam can cheat, or $-1$ if there is an infinite number of such values.

### Constraints
- $1 \le T \le 100$
- $1 \le A, B \le 10^8$

### Example Input
```
1
2 6
```

### Example Output
```
3
```

### Explanation
**Example case 1:** They can cheat for $p = 1$, $p = 2$ or $p = 4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>