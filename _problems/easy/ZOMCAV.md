---
{"category_name":"easy","problem_code":"ZOMCAV","problem_name":"Zombie and the Caves","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5\r\n1 2 3 4 5\r\n1 2 3 4 5\r\n5\r\n1 2 3 4 5\r\n5 4 3 4 5","output":"NO\r\nYES","explanation":"In both example test cases, the final radiation levels in the caves are $(5, 5, 4, 4, 3)$. For example, the radiation power in cave $1$ increased the radiation levels in caves $1$ and $2$ (there is no cave $0$) by $1$, and the radiation power in cave $4$ increased the radiation levels in all caves by $1$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sayantan_das24","problem_tester":null,"date_added":"9-07-2019","tags":{"0":"aug19","1":"difference","2":"easy","3":"sayantan_das24","4":"vijju123"},"problem_difficulty_level":"Easy","best_tag":"Difference Array","editorial_url":"https://discuss.codechef.com/problems/ZOMCAV","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ZOMCAV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/ZOMCAV.pdf), [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/ZOMCAV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/ZOMCAV.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/ZOMCAV.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/ZOMCAV.pdf) as well.

There are $N$ caves in a row, numbered $1$ through $N$. For each valid $i$, the *radiation power* in the $i$-th cave is $C_i$. Originally, the *radiation level* in each cave was $0$. Then, for each valid $i$, the radiation power in cave $i$ increased the radiation levels in the caves $i-C_i, \ldots, i+C_i$ inclusive (if they exist) by $1$, so all the caves are radioactive now.

Radiation is not the only problem, though. There are also $N$ zombies with health levels $H_1, H_2, \ldots, H_N$. You want to kill all of them by getting them to the caves in such a way that there is exactly one zombie in each cave. A zombie dies in a cave if and only if the radiation level in that cave is equal to the health level of the zombie. Is it possible to kill all the zombies?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.
- The third line contains $N$ space-separated integers $H_1, H_2, \ldots, H_N$.

### Output
For each test case, print a single line containing the string `"YES"` if it is possible to kill all the zombies or `"NO"` if it is impossible (without quotes).

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10^5$
- $1 \le C_i, H_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $1 \le N \le 1,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
5
1 2 3 4 5
1 2 3 4 5
5
1 2 3 4 5
5 4 3 4 5
```

### Example Output
```
NO
YES
```

### Explanation
In both example test cases, the final radiation levels in the caves are $(5, 5, 4, 4, 3)$. For example, the radiation power in cave $1$ increased the radiation levels in caves $1$ and $2$ (there is no cave $0$) by $1$, and the radiation power in cave $4$ increased the radiation levels in all caves by $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>