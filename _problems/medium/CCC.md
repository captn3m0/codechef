---
{"category_name":"medium","problem_code":"CCC","problem_name":"Hit the Coconuts","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n2 1\n50 55 \n2 1\n40 100","output":"55\n80","explanation":"**Example case 1:** Nikki can choose one coconut and try to hit it $55$ times. It will break either after the $50$-th hit or after the $55$-th hit.\n\n**Example case 2:** Nikki can choose one coconut and hit it $40$ times. If it does not break, the other coconut must be the one that takes $40$ hits to break, so she should hit the other coconut $40$ times. In total, she needs to hit coconuts at most $80$ times.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"iamabjain","problem_tester":null,"date_added":"29-06-2017","tags":{"0":"convex","1":"dynamic","2":"iamabjain","3":"july19","4":"long","5":"medium"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CCC","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/CCC.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/CCC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/CCC.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/CCC.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/CCC.pdf) as well.

Nikki has $N$ coconuts, she wants to prepare a special coconut soup for her best friend Mansi. In order to make this soup, she has to break $Z$ coconuts. For each coconut, there is a fixed number of times Nikki needs to hit it if she wants it to break. Nikki can only hit one coconut at the same time.

Their friend Sakshi is a troublemaker. This time, Sakshi shuffled the coconuts in some (unknown) way. You are given a sequence $A_1, A_2, \ldots, A_N$ with the following meaning: it is possible to label the coconuts $1$ through $N$ in such a way that for each valid $i$, the $i$-th coconut needs to be hit exactly $A_i$ times to break.

Nikki wants to prepare the soup as soon as possible, so she wants to minimise the number of times she has to hit coconuts in the worst case in order to break $Z$ coconuts. Formally, she wants to find a strategy of hitting coconuts, possibly depending on which coconuts broke after which hits, such that no matter which coconuts broke and when, it is guaranteed that after $H$ hits, there will be $Z$ broken coconuts, and there is no strategy with smaller $H$. Help Nikki find $H$ — the minimum required number of hits.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Z$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the minimum required number of hits.

### Constraints
- $1 \le T \le 1,000$
- $1 \le  Z \le N \le 10^3$
- $1 \le A_i \le 10^6$ for each valid $i$
- the sum of $N \cdot Z$ over all test cases does not exceed $3 \cdot 10^6$

### Subtasks
**Subtask #1 (10 points):**
- $1 \le T \le 100$
- $1 \le N \le 500$
- $Z = 1$
- $1 \le A_i \le 1,000$ for each valid $i$
- the sum of $N \cdot Z$ over all test cases does not exceed $3,000$

**Subtask #2 (90 points):** original constraints

### Example Input
```
2
2 1
50 55 
2 1
40 100
```

### Example Output
```
55
80
```

### Explanation
**Example case 1:** Nikki can choose one coconut and try to hit it $55$ times. It will break either after the $50$-th hit or after the $55$-th hit.

**Example case 2:** Nikki can choose one coconut and hit it $40$ times. If it does not break, the other coconut must be the one that takes $40$ hits to break, so she should hit the other coconut $40$ times. In total, she needs to hit coconuts at most $80$ times.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>