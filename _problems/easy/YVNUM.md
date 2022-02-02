---
{"category_name":"easy","problem_code":"YVNUM","problem_name":"Yalalovichik Numbers","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":null,"date_added":"19-12-2018","tags":{"0":"cook101","1":"deadwing97"},"editorial_url":"https://discuss.codechef.com/problems/YVNUM","time":{"view_start_date":1545589802,"submit_start_date":1545589802,"visible_start_date":1545589802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/CK101TST/hindi/YVNUM.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/CK101TST/mandarin/YVNUM.pdf), [Russian](http://www.codechef.com/download/translated/CK101TST/russian/YVNUM.pdf), [Vietnamese](http://www.codechef.com/download/translated/CK101TST/vietnamese/YVNUM.pdf) and [Bengali](http://www.codechef.com/download/translated/CK101TST/bengali/YVNUM.pdf) as well.

The Petrozavodsk camp takes place in about one month. Jafar wants to participate in the camp, but guess what? His coach is Yalalovichik.

Yalalovichik is a legendary coach, famous in the history of competitive programming. However, he is only willing to send to the camp students who solve really hard problems on Timus. The deadline that Yalalovichik set before has passed and he refuses to send Jafar to the camp.

Jafar decided to make Yalalovichik happy in hopes of changing his decision, so he invented a new sequence of numbers and named them Yalalovichik numbers. Jafar is writing a research paper about their properties and wants to publish it in the Science Eagle yearly journal.

A Yalalovichik number is created in the following way:
- Consider an integer $N$ in decimal notation; let's call it the *base* of the Yalalovichik number $Y_N$. $N$ may not contain the digit $0$.
- Treat $N$ as a decimal string. Compute all left shifts of this string $N_0, N_1, \ldots, N_{|N|-1}$ ($|N|$ denotes the number of digits of $N$); specifically, $N_k$ denotes the string formed by moving the first $k$ digits of $N$ to the end in the same order.
- Concatenate the strings $N_0, N_1, \ldots, N_{|N|-1}$. The resulting string is the decimal notation of $Y_N$.

For example, if $N = 123$, the left shifts are $123, 231, 312$ and thus $Y_N = 123231312$.

You are given the base $N$. Calculate the value of $Y_N$ modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains a single decimal integer $N$.

### Output
For each test case, print a single line containing one integer — the value of the Yalalovichik number $Y_N$ modulo $10^9+7$.

### Constraints 
- $1 \le T \le 200$
- $|N| \le 10^5$
- $N$ does not contain the digit $0$
- the sum of $|N|$ over all test cases does not exceed $10^6$

### Example Input
```
1
123
```

### Example Output
```
123231312
```
