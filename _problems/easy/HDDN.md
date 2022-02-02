---
{"category_name":"easy","problem_code":"HDDN","problem_name":"Hidden Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 3 2\r\n1 1 2\r\n2 2 3\r\n3 1 1\r\n1 1 1\r\n3 1 1\r\n1 1 2","output":"Yes\r\n2 1 2 \r\nYes\r\n1 1 1 \r\nNo","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"18-10-2019","tags":{"0":"cook111","1":"easy","2":"implementation","3":"kmaaszraa","4":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HDDN","time":{"view_start_date":1571596202,"submit_start_date":1571596202,"visible_start_date":1571596202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HDDN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK111/hindi/HDDN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK111/mandarin/HDDN.pdf), [Russian](https://www.codechef.com/download/translated/COOK111/russian/HDDN.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK111/vietnamese/HDDN.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK111/bengali/HDDN.pdf) as well.

It's not always easy to make up stories around problems ― like this one.

We know that there is a hidden sequence $A_1, A_2, \ldots, A_N$ which contains only integers between $1$ and $K$ inclusive. We have acquired $M$ triplets $(X_1, Y_1, Z_1), (X_2, Y_2, Z_2), \ldots, (X_M, Y_M, Z_M)$. A very reliable source has given us intel that for each valid $i$, the $Y_i$-th occurrence of the integer $X_i$ in the sequence $A$ is $A_{Z_i}$, i.e. $A_{Z_i} = X_i$ and there are $Y_i-1$ indices $j \lt Z_i$ such that $A_j = X_i$.

Find any sequence $A$ consistent with this information or determine that no such sequence exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $K$ and $M$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains three space-separated integers $X_i, Y_i$ and $Z_i$.

### Output
For each test case:
- If no valid sequence exists, print a single line containing the string `"No"`.
- Otherwise, print two lines.
- The first of these lines should contain the string `"Yes"`.
- The second line should contain $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Constraints
- $1 \le T \le 5 \cdot 10^5$
- $1 \le N, K, M \le 5 \cdot 10^5$
- $1 \le X_i \le K$ for each valid $i$
- $1 \le Y_i, Z_i \le N$ for each valid $i$
- all triplets are pairwise distinct
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $K$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $M$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
3
3 3 2
1 1 2
2 2 3
3 1 1
1 1 1
3 1 1
1 1 2
```

### Example Output
```
Yes
2 1 2 
Yes
1 1 1 
No
```


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>