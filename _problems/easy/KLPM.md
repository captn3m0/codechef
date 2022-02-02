---
{"category_name":"easy","problem_code":"KLPM","problem_name":"Kira Loves Palindromes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bombshot","problem_tester":null,"date_added":"28-02-2019","tags":{"0":"april19","1":"bombshot","2":"dynamic","3":"easy"},"editorial_url":"https://discuss.codechef.com/problems/KLPM","time":{"view_start_date":1555320602,"submit_start_date":1555320602,"visible_start_date":1555320602,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/APRIL19/hindi/KLPM.pdf), [Bengali](http://www.codechef.com/download/translated/APRIL19/bengali/KLPM.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/APRIL19/mandarin/KLPM.pdf), [Russian](http://www.codechef.com/download/translated/APRIL19/russian/KLPM.pdf), and [Vietnamese](http://www.codechef.com/download/translated/APRIL19/vietnamese/KLPM.pdf) as well.

You are given a string $S$. Find the number of ways to choose an unordered pair of non-overlapping non-empty substrings of this string (let's denote them by $s_1$ and $s_2$ in such a way that $s_2$ starts after $s_1$ ends) such that their concatenation $s_1 + s_2$ is a palindrome.

Two pairs $(s_1, s_2)$ and $(s_1', s_2')$ are different if $s_1$ is chosen at a different position from $s_1'$ or $s_2$ is chosen at a different position from $s_2'$.

### Input
The first and only line of the input contains a single string $S$.

### Output
Print a single line containing one integer — the number of ways to choose a valid pair of substrings.

### Constraints
- $1 \le |S| \le 1,000$
- $S$ contains only lowercase English letters

### Subtasks
**Subtask #1 (25 points):** $|S| \le 100$

**Subtask #2 (75 points):** original constraints

### Example Input
```
abba
```

### Example Output
```
7
```

### Explanation
The following pairs of substrings can be chosen: ("a", "a"), ("a", "ba"), ("a", "bba"), ("ab", "a"), ("ab", "ba"), ("abb", "a"), ("b", "b").
