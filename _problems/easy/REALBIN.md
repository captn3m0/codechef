---
{"category_name":"easy","problem_code":"REALBIN","problem_name":"From Rational to Binary","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n1 2\n2 3","output":"Yes\nNo","explanation":"**Test case 1:** Chef will choose $Y=\\frac{1}{2}$, so whatever Divyam does, the number will become $0$ or $1$. Hence Chef will win in a finite number of moves. \n\n**Test case 2:** No matter what Chef chooses, it can be shown that Divyam can make sure Chef never wins.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/IGp6ZnHNQQw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"div5252","problem_tester":"","date_added":"8-05-2021","tags":{"0":"binary","1":"div5252","2":"easy","3":"ltime97"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/REALBIN","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=REALBIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/REALBIN.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/REALBIN.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/REALBIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/REALBIN.pdf) as well.

Chef and Divyam are playing a game. They start with a rational number $X$, such that $0 < X < 1$.

In each turn, Chef chooses a positive real number $Y$. Then Divyam either adds or subtracts $Y$ to $X$. So $X$ is replaced with either $X+Y$ or $X-Y$. If this number becomes $0$ or $1$, then Chef wins. Otherwise, the game continues.

You are given $X$, and you have to determine whether Chef can win in a finite number of moves. More formally, does there exist a finite number $N$ so that Chef has a strategy that is guaranteed to win in at most $N$ moves?

Here, $X$ will be given in the form $\frac{A}{B}$, where $A$ and $B$ are positive integers, $A < B$ and $\gcd(A,B)=1$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $A$ and $B$.

### Output
For each test case, print a single line containing the string `"Yes"` if Chef can win the game in a finite number of moves and `"No"` otherwise (without quotes). You can print `"Yes"` or `"No"` in any case.

### Constraints
- $1 \leq T \leq 10^6$
- $1 \leq A < B \leq 10^{18}$
- $\gcd(A, B)=1$

### Subtasks
**Subtask #1 (100 points):** Original constraints

### Sample Input
```
2
1 2
2 3
```

### Sample Output
```
Yes
No
```

### Explanation
**Test case 1:** Chef will choose $Y=\frac{1}{2}$, so whatever Divyam does, the number will become $0$ or $1$. Hence Chef will win in a finite number of moves. 

**Test case 2:** No matter what Chef chooses, it can be shown that Divyam can make sure Chef never wins.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>