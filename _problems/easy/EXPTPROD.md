---
{"category_name":"easy","problem_code":"EXPTPROD","problem_name":"Expected Product","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n2 3\n1 1\n3 2\n2 1 2","output":"1\n444444449","explanation":"**Example case 1:** Regardless of Chef\u0027s exact choices, the final score is always $(1 \\cdot 1 \\cdot 1) \\% 2 = 1$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"imanik","problem_tester":null,"date_added":"12-07-2019","tags":{"0":"cook108","1":"expected","2":"exponentiation","3":"imanik","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Expected Value","editorial_url":"https://discuss.codechef.com/problems/EXPTPROD","time":{"view_start_date":1563733802,"submit_start_date":1563733802,"visible_start_date":1563733802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXPTPROD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK108/hindi/EXPTPROD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK108/mandarin/EXPTPROD.pdf), [Russian](https://www.codechef.com/download/translated/COOK108/russian/EXPTPROD.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK108/vietnamese/EXPTPROD.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK108/bengali/EXPTPROD.pdf) as well.

Chef is playing a tricky game with a sequence $a_1, a_2, \ldots, a_N$. Initially, his score is $S = 1$. In the game, he performs the following process exactly $K$ times (note that the sequence $a$ never changes):
- Pick an element $X$ from the sequence $a$ uniformly randomly.
- Change the score $S$ to $(S \cdot X) \% N$.

Find the expected value of Chef's score $S$ at the end of the game. It can be shown that this expected value can be expressed as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are coprime integers, $P \ge 0$, $Q \gt 0$ and $Q$ is coprime with $10^9 + 7$. You should compute $P \cdot Q^{-1} \% (10^9 + 7)$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer $P \cdot Q^{-1}$ modulo $10^9 + 7$.

### Constraints
- $1 \le T \le 5$
- $2 \le N \le 1,000$
- $0 \le a_i \lt N$ for each valid $i$
- $1 \le K \le 10^9$

### Example Input
```
2
2 3
1 1
3 2
2 1 2
```

### Example Output
```
1
444444449
```

### Explanation
**Example case 1:** Regardless of Chef's exact choices, the final score is always $(1 \cdot 1 \cdot 1) \% 2 = 1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>