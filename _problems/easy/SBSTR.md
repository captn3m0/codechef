---
{"category_name":"easy","problem_code":"SBSTR","problem_name":"Count Substrings","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"23-05-2018","tags":{"0":"array","1":"freq","2":"kingofnumbers","3":"looping","4":"simple","5":"string"},"editorial_url":"https://discuss.codechef.com/problems/SBSTR","time":{"view_start_date":1527354000,"submit_start_date":1527354000,"visible_start_date":1527354000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/mandarin/SBSTR.pdf">Mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME60/vietnamese/SBSTR.pdf">Vietnamese</a> as well.</h3>

Let's call a string $X$ *interesting* if it satisfies the following conditions:
- $X$ contains at least $K$ pairwise distinct characters
- for any two characters $c_1$ and $c_2$ which appear in $X$, the frequency (number of occurrences) of $c_1$ in $X$ is equal to the frequency of $c_2$ in $X$

You are given a string $S$. Compute the number of interesting substrings of $S$. Two substrings are considered different if they are located at different positions in $S$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a string $S$, followed by a space and and integer $K$.

### Output
For each test case, print a single line containing one integer — the number of interesting substrings.

### Constraints 
- $1 \le T \le 10$
- $1 \le |S| \le 7,000$
- the sum of $|S|$ in all test cases does not exceed $14,000$
- $|S|$ contains only lowercase English letters
- $0 \le K \le 26$

### Subtasks
**Subtask #1 (20 points):** $1 \le |S| \le 100$

**Subtask #2 (20 points):**
- $1 \le |S| \le 1,000$
- the sum of $|S|$ in all test cases does not exceed $2,000$

**Subtask #3 (60 points):** original constraints

### Example Input
```
1
ababc 2
```

### Example Output
```
6
```
	
### Explanation

**Example case 1:** The interesting substrings are "ab", "ba", "ab", "bc", "abab" and "abc".