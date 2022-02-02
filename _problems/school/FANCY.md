---
{"category_name":"school","problem_code":"FANCY","problem_name":"Fancy Quotes","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"shivam_g1470","problem_tester":null,"date_added":"1-01-2019","tags":{"0":"cakewalk","1":"jan19","2":"shivam_g1470","3":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/FANCY","time":{"view_start_date":1547458202,"submit_start_date":1547458202,"visible_start_date":1547458202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problem statements in [Hindi](http://www.codechef.com/download/translated/JAN19/hindi/FANCY.pdf), [Bengali](http://www.codechef.com/download/translated/JAN19/bengali/FANCY.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/JAN19/mandarin/FANCY.pdf), [Russian](http://www.codechef.com/download/translated/JAN19/russian/FANCY.pdf), and [Vietnamese](http://www.codechef.com/download/translated/JAN19/vietnamese/FANCY.pdf) as well.

"I don't have any fancy quotes." - vijju123

Chef was reading some quotes by great people. Now, he is interested in classifying all the fancy quotes he knows. He thinks that all fancy quotes which contain the word "not" are *Real Fancy*; quotes that do not contain it are *regularly fancy*.

You are given some quotes. For each quote, you need to tell Chef if it is Real Fancy or just regularly fancy.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $S$ denoting a quote.

### Output
For each test case, print a single line containing the string `"Real Fancy"` or `"regularly fancy"` (without quotes).

### Constraints 
- $1 \le T \le 50$
- $1 \le |S| \le 100$
- each character of $S$ is either a lowercase English letter or a space

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
2
i do not have any fancy quotes
when nothing goes right go left
```

### Example Output
```
Real Fancy
regularly fancy
```

### Explanation
**Example case 1:** "i do **not** have any fancy quotes"

**Example case 2**: The word "not" does not appear in the given quote.
