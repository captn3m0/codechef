---
{"category_name":"school","problem_code":"CHEFINSQ","problem_name":"Chef and Interesting Subsequences ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\n4 2\n1 2 3 4","output":1,"explanation":"**Example case 1:** There are six subsequences with length $2$: $(1, 2)$, $(1, 3)$, $(1, 4)$, $(2, 3)$, $(2, 4)$ and $(3, 4)$. The minimum sum is $3$ and the only subsequence with this sum is $(1, 2)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/0c0n-5y9sIM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"theabd1234","problem_tester":"","date_added":"22-08-2019","tags":{"0":"anand20","1":"easy","2":"sept19","3":"sorting","4":"theabd1234"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFINSQ","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFINSQ","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT19/hindi/CHEFINSQ.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/CHEFINSQ.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/CHEFINSQ.pdf), [Russian](https://www.codechef.com/download/translated/SEPT19/russian/CHEFINSQ.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/CHEFINSQ.pdf) as well.

Chef has a sequence $A_1, A_2, \ldots, A_N$. This sequence has exactly $2^N$ subsequences. Chef considers a subsequence of $A$ *interesting* if its size is exactly $K$ and the sum of all its elements is minimum possible, i.e. there is no subsequence with size $K$ which has a smaller sum.

Help Chef find the number of interesting subsequences of the sequence $A$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the number of interesting subsequences.

### Constraints
- $1 \le T \le 10$
- $1 \le K \le N \le 50$
- $1 \le A_i \le 100$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):** $1 \le N \le 20$

**Subtask #2 (70 points):** original constraints

### Example Input
```
1
4 2
1 2 3 4
```

### Example Output
```
1
```

### Explanation
**Example case 1:** There are six subsequences with length $2$: $(1, 2)$, $(1, 3)$, $(1, 4)$, $(2, 3)$, $(2, 4)$ and $(3, 4)$. The minimum sum is $3$ and the only subsequence with this sum is $(1, 2)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>