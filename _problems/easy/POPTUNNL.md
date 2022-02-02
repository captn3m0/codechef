---
{"category_name":"easy","problem_code":"POPTUNNL","problem_name":"Under the Tunnels","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 2\r\n11001\r\n01010\r\n10101\r\n00110\r\n10101\r\n3 1\r\n110\r\n010\r\n011","output":"4\r\n-1","explanation":"**Example case 1:** The optimal sequence of jumps is $1 \\rightarrow 2 \\rightarrow 4 \\rightarrow 3 \\rightarrow 5$. A shorter sequence does not exist.\r\n\r\n**Example case 2:** There is no sequence of jumps that would allow you to reach tile $3$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"infinitepro","problem_tester":null,"date_added":"24-01-2020","tags":{"0":"easy","1":"infinitepro","2":"ltime80","3":"shortest","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Shortest Path","editorial_url":"https://discuss.codechef.com/problems/POPTUNNL","time":{"view_start_date":1579971602,"submit_start_date":1579971602,"visible_start_date":1579971602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=POPTUNNL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME80/bengali/POPTUNNL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME80/mandarin/POPTUNNL.pdf), [Russian](https://www.codechef.com/download/translated/LTIME80/russian/POPTUNNL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME80/vietnamese/POPTUNNL.pdf) as well.

"All the pain in the world will not help you find something that does not exist..."

You are Dastan, the great Prince of Persia!

Under the tunnels of Alamut, you have discovered a path ― a sequence of $N$ tiles (numbered $1$ through $N$) ahead of you. You are currently on tile $1$. There is a signboard beside you, which says thus:
- Stepping on tile $i$ (for each valid $i$) activates a switch described by a binary string $S_i$ with length $N$. When you fell through the tunnels onto tile $1$, switch $S_1$ got activated.
- For each valid $i$, when the switch $S_i$ gets activated, then for each $j$ ($1 \le j \le N)$, if the $j$-th character of $S_i$ is '0', tile $j$ becomes unsafe to step on; otherwise (if the $j$-th character is '1'), tile $j$ becomes safe to step on.
- Step on an unsafe tile and you shall testify the fate of all men ― death!
- You shall find that which you seek on reaching tile $N$. This tile must also be safe when you step on it.

Being a trained warrior, you are able to make jumps with length up to $K$ tiles, **in both directions**. In other words, if you are currently at a tile $i$, you may jump to a tile $j$ if $j$ is a valid tile and $|i-j| \le K$.

You want to reach tile $N$ as quickly as possible ― you want to minimise the number of jumps you need to make. Find this minimum number of jumps.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a single string $S_i$ with length $N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of jumps you need to reach your target, or $-1$ if it is impossible.

### Constraints
- $1 \le T \le 10^2$
- $1 \le K \lt N \le 10^3$
- $S_1, S_2, \ldots, S_N$ contain only characters '0' and '1'
- for each valid $i$, the $i$-th digit of $S_i$ is '1'
- the sum of $N^2$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $T \le 10$
- $N \le 10$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
5 2
11001
01010
10101
00110
10101
3 1
110
010
011
```

### Example Output
```
4
-1
```

### Explanation
**Example case 1:** The optimal sequence of jumps is $1 \rightarrow 2 \rightarrow 4 \rightarrow 3 \rightarrow 5$. A shorter sequence does not exist.

**Example case 2:** There is no sequence of jumps that would allow you to reach tile $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>