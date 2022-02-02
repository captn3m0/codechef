---
{"category_name":"easy","problem_code":"BINFUN","problem_name":"Binary Concatenation ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n5 9\r\n7\r\n1 2 4 8 16 64 128","output":"12\r\n127","explanation":"**Example case 1:** The maximum value is $12 =$ BinaryConcatenation($5$, $9$). The function computes the following:\r\n- binX = \u0022101\u0022\r\n- binY = \u00221001\u0022\r\n- binXplusY = \u00221011001\u0022\r\n- binYplusX = \u00221001101\u0022\r\n- XplusY = $89$\r\n- YplusX = $77$\r\n- the return value is $89-77 = 12$\r\n\r\n**Example case 2:** The maximum value is $127 =$ BinaryConcatenation($1$, $128$).","isDeleted":false}}},"video_editorial_url":"https://youtu.be/TF3T3byiky4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shashwatchandr","problem_tester":"","date_added":"22-07-2020","tags":{"0":"easy","1":"greedy","2":"ltime86","3":"rajarshi_basu","4":"shashwatchandr"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BINFUN","time":{"view_start_date":1595696400,"submit_start_date":1595696400,"visible_start_date":1595696400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BINFUN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME86/hindi/BINFUN.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME86/bengali/BINFUN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME86/mandarin/BINFUN.pdf), [Russian](https://www.codechef.com/download/translated/LTIME86/russian/BINFUN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME86/vietnamese/BINFUN.pdf) as well.

Consider the following function, where `+` denotes string concatenation.

```
function BinaryConcatenation(integer X, integer Y):
        string binX = binary representation of X without leading zeroes
        string binY = binary representation of Y without leading zeroes

        string binXplusY = binX + binY
        string binYplusX = binY + binX

        integer XplusY = Convert binary representation binXplusY to integer
        integer YplusX = Convert binary representation binYplusX to integer
        return XplusY - YplusX
```

You are given a sequence $A_1, A_2, \ldots, A_N$, Find the maximum value of BinaryConcatenation($A_i$, $A_j$) over all valid $i$ and $j$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the maximum of BinaryConcatenation.

### Constraints
- $1 \le T \le 10^3$
- $1 \le N \le 10^5$
- $1 \le A_i \lt 2^{30}$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):** the sum of $N$ over all test cases does not exceed $1,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
2
5 9
7
1 2 4 8 16 64 128
```

### Example Output
```
12
127
```

### Explanation
**Example case 1:** The maximum value is $12 =$ BinaryConcatenation($5$, $9$). The function computes the following:
- binX = "101"
- binY = "1001"
- binXplusY = "1011001"
- binYplusX = "1001101"
- XplusY = $89$
- YplusX = $77$
- the return value is $89-77 = 12$

**Example case 2:** The maximum value is $127 =$ BinaryConcatenation($1$, $128$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>