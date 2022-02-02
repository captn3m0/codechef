---
{"category_name":"medium","problem_code":"CHEFLMN","problem_name":"Delivery Problems","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"hloya_ygrt","problem_tester":null,"date_added":"15-05-2018","tags":{"0":"cook94","1":"dynamic","2":"hloya_ygrt","3":"modular"},"editorial_url":"https://discuss.codechef.com/problems/CHEFLMN","time":{"view_start_date":1526841000,"submit_start_date":1526841000,"visible_start_date":1526841000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/COOK94/mandarin/CHEFLMN.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/COOK94/russian/CHEFLMN.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/COOK94/vietnamese/CHEFLMN.pdf" target="_blank">Vietnamese</a> as well.</h3>


Chef decided to order $N$ lemons for a future Lemon Festival. The company "LemEx" that delivers lemons provides $3,000$ yellow trucks and one red truck, and Chef wants to fully use them all. The trucks have identical capacities, so Chef wants each truck to transfer the same number of lemons.

You are given a string $M$ and an integer $K$. The decimal representation of the number $N$ can be obtained by concatenating $M$ with itself $K$ times, e.g. if $M = 903$ and $K = 3$, it means that $N = 903903903$. You are not allowed to add any leading zeroes to this decimal representation, however, it may initially contain leading zeroes.

It could be possible that $N$ lemons cannot be delivered while satisfying the given rule. Therefore, Chef may change an arbitrary number of digits (possibly zero) in the decimal representation of $N$, i.e. choose a number of positions in this string and change each of the digits at these positions to a different digit. However, it is not allowed to change two or more digits with identical original values (at different positions). There are no restrictions on the resulting values of any digits; specifically, the resulting number is also allowed to contain leading zeroes.

Find the number of ways to change the number $N$ so that all lemons can be delivered by LemEx. Since this number can be very large, we ask you to compute it modulo $10^9 + 7$.

### Input
The first and only line of the input contains a string $M$, followed by a space and an integer $K$. 

### Output
Print a single line containing one integer — the number of ways to change the number of lemons modulo $10^9 + 7$.

### Constraints 
- $1 \le |M| \le 1,000,000$
- $1 \le K \le 10^9$
- each character of $M$ is a digit between '0' and '9' inclusive
- $M$ may contain leading zeroes

### Example Input
```
3012 1
```

### Example Output
```
4
```

### Explanation

We have $M$ equal to "3012" and $K = 1$, so $N = 3012$ (once repeated $M$). The decimal representation of $N$ can be changed to "0000" (the number $0$), "3001", "6002" or "9003".
