---
{"category_name":"medium","problem_code":"PRDRAW","problem_name":"Drawing","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\naba 2","output":"776412275 499122177 0","explanation":"**Example case 1:** The actual probabilities are $\\frac{4}{9}$, $\\frac{1}{2}$ and $0$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"nirjhor","problem_tester":null,"date_added":"17-06-2020","tags":{"0":"combinatorics","1":"cook119","2":"disjoint","3":"medium","4":"nirjhor","5":"suffix","6":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Suffix Array","editorial_url":"https://discuss.codechef.com/problems/PRDRAW","time":{"view_start_date":1592764202,"submit_start_date":1592764202,"visible_start_date":1592764202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRDRAW","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK119/hindi/PRDRAW.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK119/mandarin/PRDRAW.pdf), [Russian](https://www.codechef.com/download/translated/COOK119/russian/PRDRAW.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK119/vietnamese/PRDRAW.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK119/bengali/PRDRAW.pdf) as well.

Chef has a string $S$. A substring of $S$ is obtained by removing zero or more characters from the beginning and/or end of $S$. For each $L$ ($1 \le L \le |S|$):
- $K$ times, Chef wants to choose a substring of $S$ with length $L$ uniformly randomly and independently.
- Find the probability that all these $K$ substrings will be pairwise distinct. It can be proved that this probability can be expressed as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are integers and $Q$ is coprime with $998,244,353$. You should compute $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a string $S$ followed by a space and an integer $K$.

### Output
For each test case, print a single line containing $|S|$ integers. For each valid $i$, the $i$-th of these integers should be $P \cdot Q^{-1}$ for $L = i$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le |S| \le 2 \cdot 10^5$
- $S$ contains only lowercase English letters
- $1 \le K \le 500$
- the sum of $|S|$ over all test cases does not exceed $2 \cdot 10^5$

### Example Input
```
1
aba 2
```

### Example Output
```
776412275 499122177 0
```

### Explanation
**Example case 1:** The actual probabilities are $\frac{4}{9}$, $\frac{1}{2}$ and $0$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>