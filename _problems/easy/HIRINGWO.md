---
{"category_name":"easy","problem_code":"HIRINGWO","problem_name":"Hiring Workers","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 3\r\n2 6","output":"4\r\n5","explanation":"**Example case 1:** We can hire a team of $3$ workers for task $1$ and $1$ worker for task $2$. The one-man team working on task $2$ completes it and submits the result for approval on each day, but it is rejected on the first and second day. On the third day, the team working on task $1$ also completes their task, so the project gets approved after exactly $3$ days.\r\n\r\n**Example case 2:** We can hire a team of $3$ workers for task $1$ and a team of $2$ workers for task $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/Il85lRMHrj8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shaanknight","problem_tester":"","date_added":"20-11-2020","tags":{"0":"brute","1":"cook124","2":"dynamic","3":"easy","4":"shaanknight"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/HIRINGWO","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HIRINGWO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK124/hindi/HIRINGWO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK124/mandarin/HIRINGWO.pdf), [Russian](https://www.codechef.com/download/translated/COOK124/russian/HIRINGWO.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK124/vietnamese/HIRINGWO.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK124/bengali/HIRINGWO.pdf) as well.

A manufacturing project consists of exactly $K$ tasks. The board overviewing the project wants to hire $K$ teams of workers — one for each task. All teams begin working simultaneously.

Obviously, there must be at least one person in each team. For a team of $A$ workers, it takes exactly $A$ days to complete the task they are hired for. Each team acts independently, unaware of the status of other teams (whether they have completed their tasks or not), and submits their result for approval on the $A$-th day.

However, the board approves the project only if all $K$ teams complete their tasks on the same day — it rejects everything submitted on any other day. The day after a team finds out that its result was rejected, it resumes work on the same task afresh. Therefore, as long as a team of $A$ workers keeps getting rejected, it submits a new result of their task for approval on the $A$-th, $2A$-th, $3A$-th day etc.

The board wants to hire workers in such a way that it takes exactly $X$ days to complete the project. Find the smallest number of workers it needs to hire.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $K$ and $X$.

### Output
For each test case, print a single line containing one integer — the smallest required number of workers.

### Constraints
- $1 \le T \le 40$
- $2 \le K, X \le 10^6$

### Example Input
```
2
2 3
2 6
```

### Example Output
```
4
5
```

### Explanation
**Example case 1:** We can hire a team of $3$ workers for task $1$ and $1$ worker for task $2$. The one-man team working on task $2$ completes it and submits the result for approval on each day, but it is rejected on the first and second day. On the third day, the team working on task $1$ also completes their task, so the project gets approved after exactly $3$ days.

**Example case 2:** We can hire a team of $3$ workers for task $1$ and a team of $2$ workers for task $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>