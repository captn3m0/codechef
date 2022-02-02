---
{"category_name":"school","problem_code":"EITA","problem_name":"Maximum Production","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/9cZ7sSj4eBI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"stevens","problem_tester":"","date_added":"22-06-2021","tags":{"0":"cakewalk","1":"july21","2":"stevens"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/EITA","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EITA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/EITA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/EITA.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/EITA.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/EITA.pdf) as well.

Chefland has $7$ days in a week. Chef is very conscious about his work done during the week.

There are two ways he can spend his energy during the week. The first way is to do $x$ units of work every day and the second way is to do $y$ ($\gt x$) units of work for the first $d$ ($\lt 7$) days and to do $z$ ($\lt x$) units of work thereafter since he will get tired of working more in the initial few days.

Find the maximum amount of work he can do during the week if he is free to choose either of the two strategies.

### Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow.
- Each test case contains a single line of input, four integers $d$, $x$, $y$, $z$.

### Output
For each testcase, output in a single line the answer to the problem.

### Constraints
- $1 \leq T \leq 5\cdot 10^3$
- $1 \leq d \lt 7$
- $1 \leq z \lt x \lt y \leq 18$

### Subtasks
**Subtask #1 (100 points):** Original constraints

### Sample Input
```
3
1 2 3 1
6 2 3 1
1 2 8 1
```

### Sample Output
```
14
19
14
```

### Explanation

**Test Case $1$:** Using the first strategy, Chef does $2 \cdot 7 = 14$ units of work and using the second strategy Chef does $3 \cdot 1 + 1 \cdot 6 = 9$ units of work. So the maximum amount of work that Chef can do is $\max(14, 9) = 14$ units by using the first strategy.

**Test Case $2$:** Using the first strategy, Chef does $2 \cdot 7 = 14$ units of work and using the second strategy Chef does $3 \cdot 6 + 1 \cdot 1 = 19$ units of work. So the maximum amount of work that Chef can do is $\max(14, 19) = 19$ units by using the second strategy.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>