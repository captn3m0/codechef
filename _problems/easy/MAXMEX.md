---
{"category_name":"easy","problem_code":"MAXMEX","problem_name":"Max Mex","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 3\r\n1 2 4","output":3,"explanation":"**Example case 1:** The MEX of whole array is 3. Hence, we can choose all the elements.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rezwanarefin01","problem_tester":null,"date_added":"14-06-2020","tags":{"0":"cook119","1":"rezwanarefin01","2":"simple","3":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAXMEX","time":{"view_start_date":1592764202,"submit_start_date":1592764202,"visible_start_date":1592764202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXMEX","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK119/hindi/MAXMEX.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK119/mandarin/MAXMEX.pdf), [Russian](https://www.codechef.com/download/translated/COOK119/russian/MAXMEX.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK119/vietnamese/MAXMEX.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK119/bengali/MAXMEX.pdf) as well.

Chef has a sequence of positive integers $A_1, A_2, \ldots, A_N$. He wants to choose some elements of this sequence (possibly none or all of them) and compute their MEX, i.e. the smallest positive integer which does not occur among the chosen elements. For example, the MEX of $[1, 2, 4]$ is $3$.

Help Chef find the largest number of elements of the sequence $A$ which he can choose such that their MEX is equal to $M$, or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum number of elements Chef can choose, or $-1$ if he cannot choose elements in such a way that their MEX is $M$.

### Constraints
- $1 \le T \le 100$
- $2 \le M \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
1
3 3
1 2 4
```

### Example Output
```
3
```

### Explanation
**Example case 1:** The MEX of whole array is 3. Hence, we can choose all the elements.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>