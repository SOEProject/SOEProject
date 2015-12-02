#SOE Project

#How to use Git

<h3>0. Install git</h3>
<p>http://git-scm.com/downloads
</p>

<h3>1. Initiate git</h3>

<pre><code>git clone -b dev https://github.com/projektit/app_prod.git
</code></pre>

<p>
</p>

<h3>2. Develop locally </h3>

<p>Important to be synced to remote</p>

<pre><code>git checkout dev
git pull origin dev
git branch local_dev
</code></pre>

<p>"local_dev" your local branch where you can do whatever you want
Never commit in dev as it is only for tracking what others have pushed to remote.
</p>

<p>
  To see changes use this:
</p>

<pre><code>git status
</code></pre>

<p>
  Save changes, only added changes will be committed.
</p>

<pre><code>git add &lt;path&gt;
git commit
</code></pre>

<h3>3. Push to remote</h3>

<pre><code>git checkout dev
git pull origin dev
</code></pre>

<p>Case 1: origin/dev is the same as dev, no new commits since you created your local branch
</p>
<pre><code>git checkout local_dev
git rebase -i &lt;after-this-commit&gt; (&lt;after-this-commit&gt; means commit x+1 e.g. parent of oldest commit-)
git push origin local_dev:dev
</code></pre>

<p>Case 2: new commits have come since you created your local branch
</p>
<pre><code>git checkout local_dev
git rebase origin/dev -i
git push origin local_dev:dev
</code></pre>

<h3>4. Start with something new </h3>

<pre><code>git branch -d local_dev (NB!,deletes local_dev locally)
git branch local_dev
git checkout local_dev
</code></pre>

<p>
</p>

</section>
      <footer>
        <p>This project is maintained by <a href="https://github.com/SOEProject/SOEProject.git">SOEProject</a></p>
        <p><small>Hosted on GitHub Pages &mdash; Theme by <a href="https://github.com/orderedlist">orderedlist</a></small></p>
      </footer>
    </div>
    <script src="javascripts/scale.fix.js"></script>
    
  </body>
</html>
