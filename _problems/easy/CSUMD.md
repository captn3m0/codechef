---
{"category_name":"easy","problem_code":"CSUMD","problem_name":"My Fair Coins","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.314214,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"laycurse","date_added":"5-05-2012","tags":{"0":"easy","1":"july12","2":"kaushik_iska","3":"matrix","4":"recurrence"},"editorial_url":"http://discuss.codechef.com/problems/CSUMD","time":{"view_start_date":1342000262,"submit_start_date":1342000262,"visible_start_date":1341999849,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><div>
    <p>
        There are coins of 2 different denominations in Crazyland, 1-cent coins and 2-cent coins. As all the coins do, even these coins have two faces, i.e. heads and tails.
        Your task is to find out the the number of ways to create a linear arrangement of these coins so that their sum is <b>N </b>cents. The only condition on the linear arrangement is that
        the first coin in the arrangement should always face heads. All other coins could either face head or face tail.
        <br/>
    </p>
    <p>
        Take <b>N = 2</b> as an example. The possible arrangements are <b>(1H, 1H), (2H), (1H, 1T), </b>where <b>H</b> is heads and <b>T</b> is tails.
        Therefore there are <b>3</b> possible arrangements that sum up to 2-cents.
    </p>
    <p>
        <b>Note</b>
    </p>
    <p>
        While counting make sure that you count heads and tails as different.
    </p>
    <p>
        <b>Input</b>
    </p>
    <p>
        First line contains <b>T</b>, the number of cases.
    </p>
    <p>
        <b>T</b> lines follow, each containing a single number <b>N</b>, the required sum.
    </p>
    <p>
        <b>Constraints</b>
    </p>
    <p>
        0 &lt;= <b>T </b>&lt;= 10000
    </p>
    <p>
        1 &lt;= <b>N</b> &lt;= 1000000000<b></b>
    </p>
    <p>
        <b>Output</b>
    </p>
    <p>
For each case the output should be a single integer representing the number of such arrangements possible. As this can be very large print it modulo        <b>1000000007</b>.
    </p>
<p>
<b>Sample Input</b><br />
<pre>
3
1
2
3
</pre>
<br />
<b>Sample Output</b><br />
<pre>
1
3
8
</pre>
</p>
</div>