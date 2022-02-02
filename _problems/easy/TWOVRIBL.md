---
{"category_name":"easy","problem_code":"TWOVRIBL","problem_name":"Two Variables","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\n3\n8\n9","output":"3\n5\n6","explanation":"**Example case 2:** One possible sequence of values of $X$ is $0 \\rightarrow 1 \\rightarrow 2 \\rightarrow 3 \\rightarrow 5 \\rightarrow 8$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"imanik","problem_tester":null,"date_added":"12-07-2019","tags":{"0":"binary","1":"brute","2":"cook108","3":"imanik","4":"pre","5":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/TWOVRIBL","time":{"view_start_date":1563733802,"submit_start_date":1563733802,"visible_start_date":1563733802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TWOVRIBL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK108/hindi/TWOVRIBL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK108/mandarin/TWOVRIBL.pdf), [Russian](https://www.codechef.com/download/translated/COOK108/russian/TWOVRIBL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK108/vietnamese/TWOVRIBL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK108/bengali/TWOVRIBL.pdf) as well.

Chef played an interesting game yesterday. This game is played with two variables $X$ and $Y$; initially, $X = Y = 0$. Chef may make an arbitrary number of moves (including zero). In each move, he must perform the following process:
- Choose any positive integer $P$ such that $P \cdot P \gt Y$.
- Change $X$ to $P$.
- Add $P \cdot P$ to $Y$.

Unfortunately, Chef has a bad memory and he has forgotten the moves he made. He only remembers the value of $X$ after the game finished; let's denote it by $X_f$. Can you tell him the maximum possible number of moves he could have made in the game?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single integer $X_f$.

### Output
For each test case, print a single line containing one integer — the maximum number of moves Chef could have made.

### Constraints
- $1 \le T \le 10^5$
- $1 \le X_f \le 10^9$

### Example Input
```
3
3
8
9
```

### Example Output
```
3
5
6
```

### Explanation
**Example case 2:** One possible sequence of values of $X$ is $0 \rightarrow 1 \rightarrow 2 \rightarrow 3 \rightarrow 5 \rightarrow 8$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>