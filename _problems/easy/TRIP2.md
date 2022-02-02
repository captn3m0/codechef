---
{"category_name":"easy","problem_code":"TRIP2","problem_name":"Chef and Trip","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"30-08-2019","tags":{"0":"kingofnumbers","1":"ltime75","2":"simple","3":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TRIP2","time":{"view_start_date":1567272600,"submit_start_date":1567272600,"visible_start_date":1567272600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRIP2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME75/hindi/TRIP2.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME75/bengali/TRIP2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME75/mandarin/TRIP2.pdf), [Russian](https://www.codechef.com/download/translated/LTIME75/russian/TRIP2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME75/vietnamese/TRIP2.pdf) as well.

Chef and his friend Chefu decided to go on a trip. The trip takes place over the next $N$ days (numbered 1 through $N$). There are $K$ different places Chef and Chefu could visit (numbered 1 through $K$). They have written a sequence $A_1, A_2, \ldots, A_N$ which denotes the plan of the trip during these $N$ days; however, the plan is not completed yet. For each valid $i$, they want to visit the place $A_i$ on the $i$-th day, but if $A_i = -1$, then they haven't decided which place to visit on that day.

Chef and his friend do not want to visit the same place two days in a row, but they can visit a place more than once in total. It is not necessary to visit all the places during the trip. Determine whether it is possible to complete the plan in such a way that this condition is satisfied. If it is possible, find one way of completing the plan.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a line containing the string `"YES"` if it's possible the complete the plan or `"NO"` otherwise.

If it's possible to complete the plan, print a second line containing $N$ space-separated integers denoting the sequence $A_1, A_2, \ldots, A_N$ after completing the plan. If there is more than one solution, you may print any one.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $2 \le K \le 10^5$
- $1 \le A_i \le K$ or $A_i = -1$ for each valid $i$
- if $A_i \neq -1$ and $A_{i+1} \neq -1$, then $A_i \neq A_{i+1}$, for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (30 points):**
- $N \le 1,000$
- $K = 2$
- the sum of $N$ over all test cases does not exceed $10,000$

**Subtask #2 (70 points):** original constraints

### Example Input
```
5
5 3
-1 -1 -1 -1 -1
4 5
1 2 3 5
3 2
1 -1 2
4 2
1 -1 -1 1
6 4
-1 -1 4 -1 2 -1
```

### Example Output
```
YES
1 2 1 2 1
YES
1 2 3 5
NO
NO
YES
1 2 4 1 2 1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>