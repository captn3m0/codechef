---
{"category_name":"easy","problem_code":"BEAUTGAR","problem_name":"Beautiful Garland","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"13-11-2018","tags":{"0":"admin2","1":"cook100","2":"observation","3":"simple","4":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/BEAUTGAR","time":{"view_start_date":1542565802,"submit_start_date":1542565802,"visible_start_date":1542565802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/CK100TST/hindi/BEAUTGAR.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/CK100TST/mandarin/BEAUTGAR.pdf), [Russian](http://www.codechef.com/download/translated/CK100TST/russian/BEAUTGAR.pdf), [Vietnamese](http://www.codechef.com/download/translated/CK100TST/vietnamese/BEAUTGAR.pdf) and [Bengali](http://www.codechef.com/download/translated/CK100TST/bengali/BEAUTGAR.pdf) as well.

There is a garland — a cyclic rope with red and green flowers on it in some order. The sequence of flower colours is described by a string $s$; since the rope is cyclic, each two consecutive flowers are adjacent and the first and last flower are also adjacent.

The garland is *beautiful* if there is no pair of adjacent flowers with identical colours.

You want the garland to be beautiful. To achieve that, you may perform the following operation at most once:
- Make two cuts on the rope (not intersecting the flowers), splitting the garland into two parts.
- Reverse one of these two parts.
- Tie together corresponding endpoints of the two parts, creating one whole garland again.

Can you find out whether it is possible to make the garland beautiful?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single string $s$ describing the garland. Each character of $s$ is either 'R' or 'G', denoting a red or green flower respectively.

### Output
For each test case, print a single line containing the string `"yes"` if the garland can be made beautiful or `"no"` otherwise.

### Constraints
- $1 \le T \le 10^5$
- $2 \le |s| \le 10^5$
- the sum of $|s|$ over all test cases does not exceed $10^6$

### Example Input
```
3
RG
RRGG
RR
```

### Example Output
```
yes
yes
no
```

### Explanation
**Example case 1:** The garland is already beautiful.

**Example case 2:** We can cut the garland between flowers 1 and 2 and between flowers 3 and 4. After reversing the part containing flowers 2 and 3 and rejoining, we obtain "RGRG".
