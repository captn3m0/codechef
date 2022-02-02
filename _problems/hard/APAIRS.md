---
{"category_name":"hard","problem_code":"APAIRS","problem_name":"Scoring Pairs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1 10\r\n3 17","output":"312\r\n724","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"foyaz05","problem_tester":null,"date_added":"8-10-2019","tags":{"0":"brute","1":"dec19","2":"digit","3":"foyaz05","4":"medium","5":"melfice","6":"probability"},"problem_difficulty_level":"Medium-Hard","best_tag":"Brute Force","editorial_url":"https://discuss.codechef.com/problems/APAIRS","time":{"view_start_date":1576488720,"submit_start_date":1576488720,"visible_start_date":1576488720,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=APAIRS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/DEC19/hindi/APAIRS.pdf), [Bengali](https://www.codechef.com/download/translated/DEC19/bengali/APAIRS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/DEC19/mandarin/APAIRS.pdf), [Russian](https://www.codechef.com/download/translated/DEC19/russian/APAIRS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/DEC19/vietnamese/APAIRS.pdf) as well.

Chef likes assigning scores to pairs of numbers in an unusual way:
- Consider a pair $(X, Y)$ of integers in decimal representation. If they don't have the same number of digits, add leading zeros to the smaller of these integers until they have the same number of digits. Let's denote the number of digits in each of the resulting decimal representations by $D$.
- Reorder the digits of $Y$ in an arbitrary way.
- For each $i$ ($1 \le i \le D$), calculate the absolute difference between the $i$-th digit of $X$ and the $i$-th digit of $Y$, and sum up these differences.
- The score of the pair $(X, Y)$ is the minimum possible value of this sum.

Consider the pair $(3178, 10920)$ as an example. The scoring procedure would be:
- Add a leading zero to $X$, so the decimal representations are "03178" and "10920".
- Reorder "10920" e.g. to "01029".
- The score is $|0-0| + |3-1| + |1-0| + |7-2| + |8-9| = 9$, since it is impossible to achieve a smaller sum.

Now, Chef has a range $[L, R]$, and he wants to calculate the sum of scores of all pairs of integers in this range ― formally, $\sum_{i=L}^{R} \sum_{j=L}^{R} \mathrm{score}(i, j)$. Since he is very busy with all his problem cooking, he asks you to write a program that would compute this sum. Since it could be very large, compute it modulo $1,000,000,007$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $L$ and $R$.

### Output
For each test case, print a single line containing one integer ― the sum of scores modulo $1,000,000,007$.

### Constraints
- $1 \le T \le 50$
- $1 \le L \le R \le 10^{18}$

### Subtasks
**Subtask #1 (10 points):** $R \le 10^3$

**Subtask #2 (40 points):** $R \le 10^9$

**Subtask #3 (20 points):** $R \le 10^{12}$

**Subtask #4 (30 points):** original constraints

### Example Input
```
2
1 10
3 17
```
 
### Example Output
```
312
724
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>