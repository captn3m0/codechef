---
{"category_name":"easy","problem_code":"SUMAGCD","problem_name":"Sum and GCD","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1              \r\n4                    \r\n4 4 7 6","output":9,"explanation":"**Example case 1:** For example, the sequence $A$ can be divided into subsequences $B = (4, 4, 6)$ and $C = (7)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"roman_derkach","problem_tester":null,"date_added":"30-04-2019","tags":{"0":"june19","1":"junechallenge","2":"roman_derkach"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SUMAGCD","time":{"view_start_date":1560763800,"submit_start_date":1560763800,"visible_start_date":1560763800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUMAGCD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE19/hindi/SUMAGCD.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE19/bengali/SUMAGCD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE19/mandarin/SUMAGCD.pdf), [Russian](https://www.codechef.com/download/translated/JUNE19/russian/SUMAGCD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE19/vietnamese/SUMAGCD.pdf) as well.

Chef has a sequence of positive integers $A_1, A_2, \ldots, A_N$. He wants to split this sequence into two non-empty (not necessarily contiguous) subsequences $B$ and $C$ such that $\mathrm{GCD}\,(B) + \mathrm{GCD}\,(C)$ is maximum possible. Help him find this maximum value.

Note: The greatest common divisor (GCD) of a sequence of positive integers is the largest positive integer that divides each element of this sequence. For example, the GCD of the sequence $(8, 12)$ is $4$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer — the maximum value of $\mathrm{GCD}\,(B) + \mathrm{GCD}\,(C)$.

### Constraints 
- $1 \le T \le 10$
- $2 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):** $2 \le N \le 20$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1              
4                    
4 4 7 6                    
```

### Example Output
```
9
```

### Explanation
**Example case 1:** For example, the sequence $A$ can be divided into subsequences $B = (4, 4, 6)$ and $C = (7)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>