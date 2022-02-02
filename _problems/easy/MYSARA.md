---
{"category_name":"easy","problem_code":"MYSARA","problem_name":"Mysterious Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n2 3\r\n4\r\n2 6 7 7","output":"2\r\n64","explanation":"**Example case 1:** There are two possible options for $A$: $(2, 1)$ and $(2, 3)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":null,"date_added":"13-03-2020","tags":{"0":"basic","1":"bit","2":"combinatorics","3":"cook116","4":"easy","5":"ezio_26","6":"tmwilliamlin"},"problem_difficulty_level":"Easy","best_tag":"Bit Manipulation","editorial_url":"https://discuss.codechef.com/problems/MYSARA","time":{"view_start_date":1112031000,"submit_start_date":1112031000,"visible_start_date":1112031000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MYSARA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK116/hindi/MYSARA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK116/mandarin/MYSARA.pdf), [Russian](https://www.codechef.com/download/translated/COOK116/russian/MYSARA.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK116/vietnamese/MYSARA.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK116/bengali/MYSARA.pdf) as well.

Chef has invited Alice for his birthday party. Now, Alice is thinking about what to give Chef as a present. She should obviously choose a sequence ― what could possibly be a better birthday gift than a sequence!

After some thinking, Alice chose a sequence of integers $A_1, A_2, \ldots, A_N$. However, she does not want to simply give this sequence to Chef. Instead, she decided to give Chef a sequence $B_1, B_2, \ldots, B_N$, where $B_i = \bigvee_{j=1}^i A_j$ for each valid $i$ and $\bigvee$ denotes the bitwise OR operation. Chef can try to generate a sequence $A$ from $B$, but there could be more than one such possible sequence.

Now, Alice is wondering how many sequences $A$ correspond to the given sequence $B$. Since this number could be very large, compute it modulo $10^9 + 7$. Note that it is not guaranteed that the given sequence $B$ was generated from some sequence $A$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing one integer ― the number of possible sequences $A$ modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 25$
- $1 \le N \le 5 \cdot 10^4$
- $0 \le B_i \lt 2^{30}$ for each valid $i$

### Example Input
```
2
2
2 3
4
2 6 7 7
```

### Example Output
```
2
64
```

### Explanation
**Example case 1:** There are two possible options for $A$: $(2, 1)$ and $(2, 3)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>