---
{"category_name":"school","problem_code":"HIT","problem_name":"Khaled in HIT","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"6\n4\n90 25 60 75\n8\n27 29 92 92 67 67 85 92\n4\n0 1 2 3\n4\n100 100 100 100\n4\n30 30 40 50\n4\n30 40 40 50","output":"60 75 90\n-1\n1 2 3\n-1\n-1\n-1","explanation":"**Example case 1:** The default distribution is the correct one.\n\n**Example case 4:** All students have the same score and grade, so there is no way to choose the thresholds and coach Khaled must resign.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jafarbadour","problem_tester":null,"date_added":"24-10-2019","tags":{"0":"jafarbadour","1":"jafarbadour","2":"ltime77"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HIT","time":{"view_start_date":1572111000,"submit_start_date":1572111000,"visible_start_date":1572111000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME77/hindi/HIT.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME77/bengali/HIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME77/mandarin/HIT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME77/russian/HIT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME77/vietnamese/HIT.pdf) as well.

Coach Khaled is a swag teacher in HIT (Hag Institute of Technology). However, he has some obsession problems.

Recently, coach Khaled was teaching a course in building 8G networks using TV antennas and programming them with assembly. There are $N$ students (numbered $1$ through $N$) in his class; for some reason, this number is always a multiple of $4$. The final exam has finished and Khaled has all the scores of his $N$ students. For each valid $i$, the score of the $i$-th student is $A_i$; each score is an integer between $0$ and $100$. Currently, the score-grade distribution is as follows:
- grade D for score smaller than $60$
- grade C for score greater or equal to $60$, but smaller than $75$
- grade B for score greater or equal to $75$, but smaller than $90$
- grade A for score greater or equal to $90$

However, coach Khaled is not satisfied with this. He wants exactly $N/4$ students to receive each grade (A, B, C and D), so that the grades are perfectly balanced. The scores cannot be changed, but the boundaries between grades can. Therefore, he wants to choose three integers $x$, $y$ and $z$ and change the grade distribution to the following (note that initially, $x = 60$, $y = 75$ and $z = 90$):
- grade D for score smaller than $x$
- grade C for score greater or equal to $x$, but smaller than $y$
- grade B for score greater or equal to $y$, but smaller than $z$
- grade A for score greater or equal to $z$

Your task is to find thresholds $x$, $y$ and $z$ that result in a perfect balance of grades. If there are multiple solutions, choose the one with the maximum value of $x+y+z$ (because coach Khaled wants seem smarter than his students); it can be proved that there is at most one such solution. Sometimes, there is no way to choose the thresholds and coach Khaled would resign because his exam questions were low-quality.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, if there is no solution, print a single line containing the integer $-1$; otherwise, print a single line containing three space-separated integers $x$, $y$ and $z$.

### Constraints
- $1 \le T \le 1,000$
- $4 \le N \le 100$
- $N$ is divisible by $4$
- $0 \le A_i \le 100$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5,000$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
6
4
90 25 60 75
8
27 29 92 92 67 67 85 92
4
0 1 2 3
4
100 100 100 100
4
30 30 40 50
4
30 40 40 50
```

### Example Output
```
60 75 90
-1
1 2 3
-1
-1
-1
```

### Explanation
**Example case 1:** The default distribution is the correct one.

**Example case 4:** All students have the same score and grade, so there is no way to choose the thresholds and coach Khaled must resign.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>