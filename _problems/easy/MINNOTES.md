---
{"category_name":"easy","problem_code":"MINNOTES","problem_name":"Optimal Denomination","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/fhbOKBBp-wQ","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"akashbhalotia","problem_tester":"","date_added":"21-06-2021","tags":{"0":"akashbhalotia","1":"easy","2":"july21","3":"prefix"},"problem_difficulty_level":"Easy","best_tag":"Prefix Sum","editorial_url":"https://discuss.codechef.com/problems/MINNOTES","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MINNOTES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/MINNOTES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/MINNOTES.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/MINNOTES.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/MINNOTES.pdf) as well.

You are the owner of a big company. You are so rich, that the government has allowed you to print as many notes as you want of any single value that you like. You also have peculiar behavioral traits and you often do things that look weird to a third person. 

You have $N$ employees, where the $i$-th employee has salary $A_i$. You want to pay them using a denomination that you create. You are also eco-friendly and wish to save paper. So, you wish to pay them using as few notes as possible. Find out the minimum number of notes required if you can alter the salary of at most one employee to any **positive integer** that you like, and choose the positive integer value that each note is worth (called its denomination).

Each employee must receive the exact value of his/her salary and no more.

### Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ integers $A_1, A_2, \ldots, A_N$, where $A_i$ is the salary of the $i$-th employee.

### Output
For each test case, output in a single line the answer to the problem.

### Constraints
- $1 \leq T \leq 12\cdot 10^4$
- $1 \leq N \leq 10^5$
- $1 \leq A_i \leq 10^9$
- The sum of $N$ over all test cases is at most $10^6$.

### Subtasks
**Subtask #1 (100 points):** Original constraints

### Sample Input
```
3
3
1 2 3
3
8 4 2
2
2 2 
```

### Sample Output
```
4
4
2
```

### Explanation

**Test Case $1$:** We can change the salary of the third person to $1$ and use $1$ as the denomination. So in total we need $\frac{1}{1} + \frac{2}{1} + \frac{1}{1}$ = $1 + 2 + 1$ = $4$ notes.

**Test Case $2$:** We can change the salary of the first person to $2$ and use $2$ as the denomination. So in total we need $1 + 2 + 1$ = $4$ notes.

**Test Case $3$:** We can use $2$ as the denomination and we need not change the salary of any person. So in total we need $1 + 1$ = $2$ notes.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>